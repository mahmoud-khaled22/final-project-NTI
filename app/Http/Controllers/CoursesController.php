<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

//  protected $fillable = ['title','description','start_date','max_students','price','instructor_id','category_id'];
class CoursesController extends Controller
{
    
    public function index(){
       $data = Course::withTrashed()->with(['instructor', 'category'])->get();
    
        return view('courses',['data'=>$data]);
    }
     
    public function store(Request $request){
         $data = Course::withTrashed()->with(['category'])->get();
         $category = $request->courseCategory;
         $ans=0;
    
         foreach($data as $info ){
            if($info->category->name==$category){
                $ans=$info->category->id;
                 break;
            }
            
         }
         
        
        $dataToInsert=[
            'title'=>$request->courseName,
            'description'=>$request->courseDescription,
            'start_date'=>$request->startDate,
            'max_students'=>$request->maxStudents,
            'price'=>$request->coursePrice,
            'instructor_id'=> Auth::id(),
            'category_id'=>$ans,
        ];

        Course::create($dataToInsert);
          return redirect()->back()->with('success', 'Course created successfully');
        
        

    }


    
}
