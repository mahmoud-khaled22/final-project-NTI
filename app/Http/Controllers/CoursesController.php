<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index(){
       $data = Course::withTrashed()->with(['instructor', 'category', 'students'])->get();
       
        return view('courses',['data'=>$data]);
    }

}
