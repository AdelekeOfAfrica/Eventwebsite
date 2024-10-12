<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class AuthenticationController extends Controller
{
    //

    public function login(){


        return view('Backend.login');
    }

    public function postLogin(Request $request)
    {
        try{
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                return redirect()->intended('/dashboard');
            }
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'email' => 'Ooops no record found!!!',
            ]);

        }catch(Exception $e){
            return view($e,[],500);
        }
    }

    public function dashboard(){
        return view('Backend.dashboard');
    }


        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        
            return redirect('/login');
       
    }
}
