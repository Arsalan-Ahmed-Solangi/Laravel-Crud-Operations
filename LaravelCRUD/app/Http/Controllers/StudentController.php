<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'FullName' => 'required|min:3',
            'FatherName' => 'required|min:3',
            'Address' => 'required',
            'Class' => 'required',
            'Gender' => 'required',
        ]);

        $student = new Student();
        $student->FullName = $request->FullName;
        $student->FatherName = $request->FatherName;
        $student->Address = $request->Address;
        $student->Class = $request->Class;
        $student->Gender = $request->Gender;
        $student->save();

        if ($student) {
            return redirect()->route('index')->with('success', 'Student Added Successfully!');
        } else {
            return redirect()->route('create')->with('error', 'Failed to add student');
        }
    }

    public function edit($id)
    {
        $student = Student::where('StudentId', '=', $id)->first();
        if (!$student) {
            return redirect()->route('index')->with('error', 'No Student Found!');
        }
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->route('index')->with('error', 'No Student Found!');
        }

        $validatedData = $request->validate([
            'FullName' => 'required|min:3',
            'FatherName' => 'required|min:3',
            'Address' => 'required',
            'Class' => 'required',
            'Gender' => 'required',
        ]);

        $student->FullName = $request->FullName;
        $student->FatherName = $request->FatherName;
        $student->Address = $request->Address;
        $student->Class = $request->Class;
        $student->Gender = $request->Gender;
        $student->save();

        if ($student) {
            return redirect()->route('index')->with('success', 'Student Updated Successfully!');
        } else {
            return redirect()->route('create')->with('error', 'Failed to Update student');
        }
    }

    public function delete($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->route('index')->with('error', 'No Student Found!');
        }

        $student->delete();
        if ($student) {
            return redirect()->route('index')->with('success', 'Student Deleted Successfully!');
        } else {
            return redirect()->route('create')->with('error', 'Failed to Delete student');
        }
    }

    public function view($id)
    {
        $student = Student::where('StudentId', '=', $id)->first();
        if (!$student) {
            return redirect()->route('index')->with('error', 'No Student Found!');
        }
        return view('view', compact('student'));
    }
}
