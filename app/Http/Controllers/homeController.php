<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class homeController extends Controller
{
     public function index(){
       $data = Course::withTrashed()->with(['instructor', 'category', 'students'])->get();
       
        return view('welcome',['data'=>$data]);
    }
}
