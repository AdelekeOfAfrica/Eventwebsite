<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\sponsors;
use Illuminate\Http\Request;

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
}
