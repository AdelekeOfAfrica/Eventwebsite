<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    //
    public function AddComment(Request $request, $id)
    {
        try {
            // Validate the input data
            $validatedData = $request->validate([
                'name' => 'required|min:3',
                'content' => 'required|min:3',
            ]);
    
            // Create a new comment
            $comment = new Comment();
            $comment->post_id = $id;
            $comment->Name = $validatedData['name'];
            $comment->Comment = $validatedData['content'];
            $comment->save();
    
            return back()->with('success', 'Comment added successfully');
            
        } catch (Exception $e) {
            
            Log::error('Error adding comment: ' . $e->getMessage());
            return back()->withErrors('Something went wrong, please try again later.');
        }
    }
    
    
}
