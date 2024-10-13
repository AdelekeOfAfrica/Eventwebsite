<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
 use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
class BannerController extends Controller
{
    //


    public function Banners(){
        try{
                return view('Backend.banners');
        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function storeBanners(Request $request){
        $request->validate([
            'photo'=>'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048'
        ]);
        $image =$request->file('photo');
        $imageName =time().'.'. $image->getClientOriginalExtension();

        $image->move('banners', $imageName);

        $imgManager = new ImageManager(new Driver());
        $thumbImage= $imgManager->read('banners/'.$imageName);

        //resizing the image 
        $thumbImage->resize(250,250);
        //store the resized image
        $response=  $thumbImage->save(public_path('banners/thumbnails'.$imageName));


        if($response){
            return  back()->with('success','image uploaded successfully');
        }
    }
}
    
    

