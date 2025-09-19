<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class register extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
      
            $credentials = $request->only('email', 'password');
        
            if (Auth::attempt($credentials)) {

                return redirect('/');
                
            }
        
            return back()->withErrors(['email' => 'Email or password is incorrect.']);
    
        }

   


}
