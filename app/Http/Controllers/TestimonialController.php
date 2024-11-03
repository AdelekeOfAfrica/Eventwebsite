<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Backend.testimonials');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try{

        
           
            $validatedData =  $request->validate([
                  'name' => 'required|string|max:255',
                  'comment'=>'required',
             
              ]);
  
              testimonial::create([
                  'name' => $validatedData['name'],
                  'comment' => $validatedData['comment'],
                 
              ]);
      
              // Respond with a success message
              return response()->json(['success' => true]);
  
          }catch(Exception $e){
              return response()->json([
                  'success' => false,
                  'message' => 'Failed to store your testimonial . Please try again later.',
                  'error' => $e->getMessage() // Optional: show the error message for debugging
              ], 500);
          }
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
       
            try {
                // Query to fetch banners
                $query = testimonial::orderBy('created_at', 'desc');
    
                // Search filter
                if ($search = $request->input('search.value')) {
                    $query->where(function($q) use ($search) {
                        $q->where('name', 'LIKE', "%{$search}%")
                        ->orWhere('comment', 'LIKE', "%{$search}%");
                        
                        // Check if search value is '0' or '1'
                        if ($search === '0' || $search === '1') {
                            $q->orWhere('status', '=', (int)$search);
                        }
                    });
                }
    
                // Pagination
                $start = $request->input('start', 0);
                $length = $request->input('length', 10);
                $testimonials = $query->skip($start)->take($length)->get();
    
                // Total records
                $totalData = Testimonial::count(); // Total count of banners
                $totalFiltered = $query->count(); // Count after filtering
    
                // Prepare data for response
                $data = [];
                foreach ($testimonials as $testimonial) {
                    $data[] = [
                        'id' => $testimonial->id,
                        'name' => $testimonial->name,
                        'comment'=>$testimonial->comment,
                        
                        'button' => '<button class="btn btn-danger" onclick="toggleStatus(' . $testimonial->id . ', 0)">Delete</button>'
             
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
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($testimonialId)
    {
        try{
        //
        $testimonial = Testimonial::findOrFail($testimonialId);

       
        // Delete the testimonial
        $testimonial->delete();

        // Return success response
        return response()->json(['success' => 'Testimonial deleted successfully.'], 200);
    } catch (\Exception $e) {
        // Return error response if something goes wrong
        return response()->json(['error' => 'Failed to delete testimonial: ' . $e->getMessage()], 500);
    
    }
}

}