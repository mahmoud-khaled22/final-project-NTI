<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Course extends Model
{
     use SoftDeletes;
    protected $table ='courses';
    protected $fillable = ['title','description','start_date','max_students','price','instructor_id','category_id'];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
        public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }




}
