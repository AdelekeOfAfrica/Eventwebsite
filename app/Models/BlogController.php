<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogController extends Model
{
    /** @use HasFactory<\Database\Factories\BlogControllerFactory> */
    use HasFactory;


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
