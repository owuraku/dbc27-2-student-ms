<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name','courseCode','description'];
    use HasFactory;

    public function students(){
        return $this->hasMany(Student::class,'courseId');
    }

}
