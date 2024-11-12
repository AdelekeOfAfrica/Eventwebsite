<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\blogs;

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
}
