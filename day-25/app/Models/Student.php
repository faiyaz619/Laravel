<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;
     public function newStudent()
     {

         $this->students= new Student();
         $this->students->name = new Student();
         $this->students->email = new Student();
         $this->students->mobile = new Student();
         $this->students->save();
     }

}
