<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;
    public function index()
    {
        return view('add-student');
    }
    public function create(Request $request)
    {
        $this->student=new Student();
        $this->student->name=$request->name;
        $this->student->email=$request->email;
        $this->student->mobile=$request->mobile;
        $this->student->save();

        return redirect()->back()->with('message','Data has been saved successfully.');

    }
}
