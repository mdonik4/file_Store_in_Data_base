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

    public function update(Request $request , $id)
    {
        Student::updateStudent($request, $id);
        return back()->with("success","Student Update Successfully");
    }

    public function edit($id)
    {
        $this->student = Student::findOrFail($id);
        return view("student.edit",["student"=>$this->student]);
    }

    public function delete($StudentId)
    {
        $this->student = Student::find($StudentId);
        if(file_exists($this->student->image))
        {
            unlink($this->student->image);
        }
        $this->student->delete();
        return back()->with("success","Student Delete Successfully");
    }
}
