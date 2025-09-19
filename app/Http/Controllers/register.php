<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class register extends Controller
{
    /**
     * .
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * مقارنه البيانات الجايه من login
     * مع data base.
     */
    public function store(Request $request)
    {
      
            $credentials = $request->only('email', 'password');
        
            if (Auth::attempt($credentials)) {
                // $name=Auth::user()->name;
                return redirect('/');
                // ->with('name',$name)
            }
        
            return back()->withErrors(['email' => 'Email or password is incorrect.']);
    
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
