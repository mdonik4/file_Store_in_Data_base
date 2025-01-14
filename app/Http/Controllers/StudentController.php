<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student,$students;
    public function create()
    {
        return view("student.create");
    }

    public function index()
    {
        $this->students = Student::all();
        return view("student.index",["students"=>$this->students]);
    }

    public function store(Request $request)
    {
        Student::createStudent($request);
        return back()->with("success","Student Create SuccessFully");
    }

    public function edit()
    {
        return view("student.edit");
    }
}
