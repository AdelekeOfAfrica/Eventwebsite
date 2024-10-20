<?php

namespace App\Http\Controllers;

use Exception;
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
}
