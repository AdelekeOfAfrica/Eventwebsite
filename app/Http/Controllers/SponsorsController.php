<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\sponsors;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SponsorsController extends Controller
{
    //
    public function getSponsorsPage(){
        try{
    
            return view('Backend.sponsors');
    
        }catch(Exception $e){
            return view($e,[],500);
        }
    }
    public function getAllSponsors(Request $request){
        try{
    
            $query = sponsors::orderBy('created_at', 'desc');
    
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
            $totalData = sponsors::count(); // Total count of banners
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
    
        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function sponsorDetail($sponsorId){
        try{

            try {
                // Fetch the event by ID
                $event = sponsors::findOrFail($sponsorId);
        
                // Return the event details as JSON
                return response()->json($event);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }

        }catch(Exception $e){
            return view($e,[],500);    
        }
    }

    public function updateSponsor(Request $request){
        try {
      
            $image = $request->file('imageUpload');
          
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('sponsors', $imageName);
    
            $imgManager = new ImageManager(new Driver());
            $thumbImage = $imgManager->read('sponsors/' . $imageName);
            $thumbImage->resize(200, 100); //width,height
            $response = $thumbImage->save(public_path('sponsors/thumbnails/' . $imageName));
    
            $id = $request->input('bannerId');
       
            $editPicture = sponsors::findOrFail($id);
            $editPicture->name = $request->input('bannerTitle');
           
            $editPicture->image_path = 'sponsors/thumbnails/' . $imageName;
           
            $editPicture->save();
    
            if ($response) {
                return back()->with('success', 'sponsor information edited successfully.');
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function createSponsor(Request $request){
        try{

            $image = $request->file('imageUpload');
          
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('sponsors', $imageName);
    
            $imgManager = new ImageManager(new Driver());
            $thumbImage = $imgManager->read('sponsors/' . $imageName);
            $thumbImage->resize(200, 100);
            $response = $thumbImage->save(public_path('sponsors/thumbnails/' . $imageName));
    
            $id = $request->input('bannerId');
       
            $editPicture = new sponsors();
            $editPicture->name = $request->input('pictureName');
           
            $editPicture->image_path = 'sponsors/thumbnails/' . $imageName;
           
            $editPicture->save();
            if ($response) {
                return back()->with('success', 'sponsor image added successfully.');
            }
        } 
    
        catch(Exception $e){
            return view($e,[],500);
        }
    }
}
