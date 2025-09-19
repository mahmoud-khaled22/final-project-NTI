<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

//  protected $fillable = ['title','description','start_date','max_students','price','instructor_id','category_id'];
class CoursesController extends Controller
{
    
    public function index(){
       $data = Course::withTrashed()->with(['instructor', 'category', 'students'])->get();
    
        return view('courses',['data'=>$data]);
    }
     
    public function store(Request $request){
         $data = Course::withTrashed()->with(['category'])->get();
         $catergory = $request->courseCategory;
         $ans=0;
         $fid=1;
         foreach($data as $info ){
            if($info->catefory->name==$catergory){
                $ans=$info->catefory->id;
                break;
            }
            
         }
         
        $fid = Auth::id();
        
        $dataToInsert=[
            'title'=>$request->courseName,
            'description'=>$request->courseDescription,
            'start_date'=>$request->startDate,
            'max_students'=>$request->maxStudents,
            'price'=>$request->coursePrice,
            'instructor_id'=>$fid,
            'category_id'=>$ans,
        ];

        Course::create($dataToInsert);
        
        
        

    }

    
}
