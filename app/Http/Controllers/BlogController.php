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
}
