<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Banner;
// use Intervention\Image\Facades\Image;
 use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BannerController extends Controller
{
    //


    public function Banners(){
        try{
            $active = Banner::where('status',1)->count();
            $notActive =Banner::where('status',0)->count();
                return view('Backend.banners',compact('active','notActive'));
        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function fetchBanners(Request $request)
    {
        try {
            // Query to fetch banners
            $query = Banner::orderBy('created_at', 'desc');

            // Search filter
            if ($search = $request->input('search.value')) {
                $query->where(function($q) use ($search) {
                    $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
                    
                    // Check if search value is '0' or '1'
                    if ($search === '0' || $search === '1') {
                        $q->orWhere('status', '=', (int)$search);
                    }
                });
            }

            // Pagination
            $start = $request->input('start', 0);
            $length = $request->input('length', 10);
            $banners = $query->skip($start)->take($length)->get();

            // Total records
            $totalData = Banner::count(); // Total count of banners
            $totalFiltered = $query->count(); // Count after filtering

            // Prepare data for response
            $data = [];
            foreach ($banners as $banner) {
                $data[] = [
                    'id' => $banner->id,
                    'name' => $banner->title,
                    'description' => $banner->description,
                    'status' => $banner->status,
                    'statusLabel' => $banner->status ? 'Active' : 'Inactive',
                    'button' => $banner->status 
                        ? '<button class="btn btn-danger" onclick="toggleStatus(' . $banner->id . ', 0)">Deactivate</button>'
                        : '<button class="btn btn-success" onclick="toggleStatus(' . $banner->id . ', 1)">Activate</button>',
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

    
    public function fetchBanner($id)
    {
        try {
            // Fetch the event by ID
            $event = Banner::findOrFail($id);

            // Return the event details as JSON
            return response()->json($event);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function toggleBannerStatus(Request $request, $id)
{
    try {
        $banner = Banner::findOrFail($id);
        $banner->status = $request->input('status');
        $banner->save();

        return response()->json(['message' => 'Status updated successfully.']);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


public function editBanner(Request $request)
{
    try {
      
        $image = $request->file('imageUpload');
      
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('banners', $imageName);

        $imgManager = new ImageManager(new Driver());
        $thumbImage = $imgManager->read('banners/' . $imageName);
        $thumbImage->resize(1920, 1080); 
        $response = $thumbImage->save(public_path('banners/thumbnails/' . $imageName));

        $id = $request->input('bannerId');
       
        $editBanner = Banner::findOrFail($id);
        $editBanner->title = $request->input('bannerTitle');
        $editBanner->description = $request->input('bannerDescription');
        $editBanner->image_path = 'banners/thumbnails/' . $imageName;
        $editBanner->status = $request->input('activeStatus', 0); // Set a default value if not provided
        $editBanner->save();

        if ($response) {
            return back()->with('success', 'Banner information edited successfully.');
        }
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function createBanner(Request $request){
    try{

        $image = $request->file('imageUpload');
      
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('banners', $imageName);

        $imgManager = new ImageManager(new Driver());
        $thumbImage = $imgManager->read('banners/' . $imageName);
        $thumbImage->resize(1920, 1080); 
        $response = $thumbImage->save(public_path('banners/thumbnails/' . $imageName));

        
       
        $newBanner = new Banner();
        $newBanner->title = $request->input('bannerTitle');
        $newBanner->description = $request->input('bannerDescription');
        $newBanner->image_path = 'banners/thumbnails/' . $imageName;
        $newBanner->status = $request->input('activeStatus', 0); // Set a default value if not provided
        $newBanner->save();

        if ($response) {
            return back()->with('success', 'Banner information edited successfully.');
        }

       
     } catch(Exception $e){
        return view($e,[],500);
    }




}

}