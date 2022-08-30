<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','studentId','gender','dob','courseId'];
    use HasFactory;


    public function course(){
        return $this->belongsTo(Course::class, 'courseId');
    }
}
