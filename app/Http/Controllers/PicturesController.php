<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Exception;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class PicturesController extends Controller
{
    //

    public function BackendPictures(){
        try{
            return view('Backend.BackendPictures');

        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    
    public function fetchBackendPictures(Request $request)
    {
        try {
            // Query to fetch banners
            $query = Pictures::orderBy('created_at', 'desc');

            // Search filter
            if ($search = $request->input('search.value')) {
                $query->where(function($q) use ($search) {
                    $q->where('name', 'LIKE', "%{$search}%")
                   ;
                    
                    // Check if search value is '0' or '1'
                    if ($search === '0' || $search === '1') {
                        $q->orWhere('status', '=', (int)$search);
                    }
                });
            }

            // Pagination
            $start = $request->input('start', 0);
            $length = $request->input('length', 10);
            $pictures = $query->skip($start)->take($length)->get();

            // Total records
            $totalData = Pictures::count(); // Total count of banners
            $totalFiltered = $query->count(); // Count after filtering

            // Prepare data for response
            $data = [];
            foreach ($pictures as $picture) {
                $data[] = [
                    'id' => $picture->id,
                    'name' => $picture->name,
                    'image_path'=>$picture->image_path,

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

    public function updateBackendPictures(Request $request)
{
    try {
      
        $image = $request->file('imageUpload');
      
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('pictures', $imageName);

        $imgManager = new ImageManager(new Driver());
        $thumbImage = $imgManager->read('pictures/' . $imageName);
        $thumbImage->resize(520, 450);
        $response = $thumbImage->save(public_path('pictures/thumbnails/' . $imageName));

        $id = $request->input('bannerId');
   
        $editPicture = Pictures::findOrFail($id);
        $editPicture->name = $request->input('bannerTitle');
       
        $editPicture->image_path = 'pictures/thumbnails/' . $imageName;
       
        $editPicture->save();

        if ($response) {
            return back()->with('success', 'Banner information edited successfully.');
        }
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function getBackendPicture($pictureId)
{
    try {
        // Fetch the event by ID
        $event = Pictures::findOrFail($pictureId);

        // Return the event details as JSON
        return response()->json($event);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function createBackendPicture(Request $request){
    try{

        $image = $request->file('imageUpload');
      
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('pictures', $imageName);

        $imgManager = new ImageManager(new Driver());
        $thumbImage = $imgManager->read('pictures/' . $imageName);
        $thumbImage->resize(520, 450);
        $response = $thumbImage->save(public_path('pictures/thumbnails/' . $imageName));

        $id = $request->input('bannerId');
   
        $editPicture = new Pictures();
        $editPicture->name = $request->input('pictureName');
       
        $editPicture->image_path = 'pictures/thumbnails/' . $imageName;
       
        $editPicture->save();
        if ($response) {
            return back()->with('success', 'Event image added successfully.');
        }
    } 

    catch(Exception $e){
        return view($e,[],500);
    }
}

    public function getSponsors(){
    try{

        return view('Backend.BackendPictures');

    }catch(Exception $e){
        return view($e,[],500);
    }
}
}
