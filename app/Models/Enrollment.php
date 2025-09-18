<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table ='enrollments';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course1()
    {
        return $this->belongsTo(Course::class);
    }
}

