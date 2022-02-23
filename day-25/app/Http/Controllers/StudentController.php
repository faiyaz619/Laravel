<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;
    public function index()
    {
        return view('add-student');
    }
    public function create(Request $request)
    {
        return $request;
    }
}
