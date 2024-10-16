<?php

namespace App\Http\Controllers;

use App\Models\events;
use Exception;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //

    public function getEventData(Request $request)
    {
        try {
            // Query to fetch events
            $query = events::orderBy('created_at', 'desc');
    
            // Search filter
            if ($search = $request->input('search.value')) {
                $query->where(function($q) use ($search) {
                    $q->where('name', 'LIKE', "%{$search}%")
                      ->orWhere('event_type', 'LIKE', "%{$search}%")
                      ->orWhere('location', 'LIKE', "%{$search}%")
                      ->orWhere('event_date', 'LIKE', "%{$search}%")
                      ->orWhere('capacity', 'LIKE', "%{$search}%")
                      ->orWhere('price', 'LIKE', "%{$search}%");
                });
            }
    
            // Pagination
            $start = $request->input('start', 0);
            $length = $request->input('length', 10);
            $events = $query->skip($start)->take($length)->get();
    
            // Total records
            $totalData = events::count(); // Total count of events
            $totalFiltered = $query->count(); // Count after filtering
    
            // Prepare data for response
            $data = [];
            foreach ($events as $event) {
                $data[] = [
                    'id'=>$event->id,
                    'name' => $event->name,
                    'event_type' => $event->event_type,
                    'event_date' => $event->event_date,
                    'location' => $event->location,
                    'capacity' => $event->capacity,
                    'price' => $event->price,
                    // 'editModalRoute' => route('editEvent', ['id' => $event->id]), // For modal edit
                    // 'viewDetailsRoute' => route('viewEvent', ['id' => $event->id]),
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

    public function show($id)
    {
        try {
            // Fetch the event by ID
            $event = events::findOrFail($id);

            // Return the event details as JSON
            return response()->json($event);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Event not found'], 404);
        }
    }
    

    public function createEvent(Request $request){
        try{

        
           
          $validatedData =  $request->validate([
                'name' => 'required|string|max:255',
                'phone_number'=>'required',
                'email' => 'required|email|max:255',
                'event_type' => 'required|string|max:255',
                'date' => 'required|date',
                'location' => 'required|string|max:255',
                'capacity' => 'required|integer|min:1',
                'price' => 'required|numeric|min:0',
            ]);

            events::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone_number'], // Correct field reference
                'event_type' => $validatedData['event_type'],
                'event_date' => $validatedData['date'],
                'location' => $validatedData['location'],
                'capacity' => $validatedData['capacity'],
                'price' => $validatedData['price'],
            ]);
    
            // Respond with a success message
            return response()->json(['success' => true]);

        }catch(Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Failed to book the event. Please try again later.',
                'error' => $e->getMessage() // Optional: show the error message for debugging
            ], 500);
        }
    }

}
