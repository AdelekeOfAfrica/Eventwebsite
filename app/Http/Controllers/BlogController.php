<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\blogs;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    /** @use HasFactory<\Database\Factories\BlogControllerFactory> */
  


    public function blogs(){
        try{
            $posts =blogs::paginate(10);
            return view('blogs',compact('posts'));
        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function blog(Request $request){
        try{
            $id=$request->input('id');
            $post=blogs::findOrFail($id);
            return view('blog',compact('post'));
        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function allBlogPost(){
        try{
            return view('Backend.Blogpost');
        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function allBlogPostApi(Request $request)
    {
        try {
            // Query to fetch banners
            $query = blogs::orderBy('created_at', 'desc');

            // Search filter
            if ($search = $request->input('search.value')) {
                $query->where(function($q) use ($search) {
                    $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('content', 'LIKE', "%{$search}%");
                    
                    // Check if search value is '0' or '1'
                    if ($search === '0' || $search === '1') {
                        $q->orWhere('status', '=', (int)$search);
                    }
                });
            }

            // Pagination
            $start = $request->input('start', 0);
            $length = $request->input('length', 10);
            $blogs = $query->skip($start)->take($length)->get();

            // Total records
            $totalData = blogs::count(); // Total count of banners
            $totalFiltered = $query->count(); // Count after filtering

            // Prepare data for response
            $data = [];
            foreach ($blogs as $blog) {
                $data[] = [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'image_path'=>$blog->image_path,
                    'content' => $blog->content,
                    
                ];
            }

            // Return response as JSON
            return response()->json([
                'draw' => intval($request->input('draw')),
                'recordsTotal' => $totalData,
                'recordsFiltered' => $totalFiltered,
                'data' => $data,
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500); // Return error message
        }
    }
    public function blogDetailPage($blogId){
        try{

            try {
                // Fetch the event by ID
                $blogPostDetails = blogs::findOrFail($blogId);
        
                // Return the event details as JSON
                return view('Backend.blogPostDetails',compact('blogPostDetails'));
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }

        }catch(Exception $e){
            return view($e,[],500);    
        }
    }


    
    public function updateBlogPostDetails(Request $request)
{
    try {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'imageUpload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'other_images' => 'nullable|array',
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        // Find the blog post by ID
        $blogId = $request->input('blogId');
        $blogPost = blogs::findOrFail($blogId);

        // Update the blog post details
        $blogPost->title = $validated['title'];
        $blogPost->content = $validated['content'];

        // Initialize variables
        $imagePaths = [];
        $imagePath = ''; // Ensure imagePath is always initialized

        // Handle the other_images field
        if ($request->hasFile('other_images')) {
            // Loop through the uploaded images and store them
            foreach ($request->file('other_images') as $image) {
                // Generate a unique image name
                $imageName = time() . '.' . $image->getClientOriginalExtension();

                // Move the original image to the 'blogPost/thumbnails/' directory
                $image->move(public_path('blogPost/thumbnails'), $imageName);

                // Resize the image using Intervention Image
                $imgManager = new ImageManager(new Driver());
                $thumbImage = $imgManager->read(public_path('blogPost/thumbnails/' . $imageName));
                $thumbImage->resize(520, 450);

                // Save the resized image to 'blogPost/thumbnails/' directory
                $thumbImage->save(public_path('blogPost/thumbnails/' . $imageName));

                // Add the resized image path to the array for other_images
                $imagePaths[] = 'blogPost/thumbnails/' . $imageName;

                // Set the main image path (can be the first image uploaded, if needed)
                if (empty($imagePath)) {
                    $imagePath = 'blogPost/thumbnails/' . $imageName;
                }
            }

            // Save the image paths as a JSON array in the database
            $blogPost->other_images = json_encode($imagePaths);
        }

        // If you have a primary image or want to update image_path, assign it here
        if ($imagePath) {
            $blogPost->image_path = $imagePath;
        }

        // Save the updated blog post
        $blogPost->save();

        // Redirect back to the blog post details page with a success message
        return redirect()->route('blog-detail-api', $blogPost->id)
            ->with('success', 'Blog post updated successfully!');
    } catch (Exception $e) {
        // If any exception occurs, return a 500 error page with the exception message
        return response()->view($e->getMessage(), [], 500);
    }
}

    
}
