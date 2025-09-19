<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;
class DashboardController extends Controller
{
    public function index(){
       $data = Course::withTrashed()->with([ 'category','instructor', 'students'])->get();
      
        return view('dashboard-instructor',['data'=>$data]);
    }
    public function edit($id){
        $data=Course::find($id);

        return view('edit-course',['data'=>$data]);

    }

    public function update($id,Request $request) {
        $dataToUpdate=Course::find($id);
         
        $dataToUpdate->title=$request->courseName;
        $dataToUpdate->start_date=$request->startDate;
        $dataToUpdate->max_students=$request->maxStudents;
        $dataToUpdate->price=$request->coursePrice;
        $category=$request->courseCategory;
        $dataOfC=Category::all();
        foreach($dataOfC as $c){
            if($category==$c->name){
                $dataToUpdate->category_id=$c->id;
            }

        }
       $dataToUpdate->save();
        return redirect()->route("instructor");
    }
    public function delete($id){
     $data = Course::find($id);
     $data->forceDelete();
     
    return redirect()->route('instructor')->with('success', 'Course deleted successfully.');

     //return redirect()->route("instructor");
    }
    


}
