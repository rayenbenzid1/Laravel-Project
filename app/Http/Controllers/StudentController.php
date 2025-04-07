<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view('student-list', ['students' => $students]);
    }

    public function addStudent(Request $request)
    {
        return view('add-student');
    }

    public function saveStudent(Request $request)
    {
        $request->validate([
            'ncin'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required'
        ]);

        $newStudent = new student;
        $newStudent->ncin = $request->ncin;
        $newStudent->name = $request->name;
        $newStudent->email = $request->email;
        $newStudent->phone = $request->phone;
        $newStudent->address = $request->address;
        $newStudent->save();
        return redirect('/student-list')->with('success','student added successfully');
    }

    public function editStudent($id)
    {
        $student = student::find($id);
        return view('edit-student', ['student' => $student]);
    }

    public function updateStudent(Request $request, $id)
    {
        $request->validate([
            'ncin'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required'
        ]);

        $student = student::find($id);
        $student->ncin = $request->ncin;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->save();
        return redirect('/student-list')->with('success','student updated successfully');
    }

    public function deleteStudent($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('/student-list')->with('success','student deleted successfully');
    }
}
