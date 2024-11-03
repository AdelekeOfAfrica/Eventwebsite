<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;



class BlogController extends Controller
{
    /** @use HasFactory<\Database\Factories\BlogControllerFactory> */
  


    public function blogs(){
        try{
            return view('blogs');
        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function blog(){
        try{
            return view('blog');
        }catch(Exception $e){
            return view($e,[],500);
        }
    }
}
