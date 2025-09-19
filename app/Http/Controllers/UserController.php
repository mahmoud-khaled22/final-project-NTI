<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
   
    public function index()
    {
        
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        
        $user =User::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' =>$request->password ,
            'role' =>$request->role,  
          ]);

          return view('loginbage');
    }

 
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
       Auth::logout();
       return redirect('/');
    }
}
