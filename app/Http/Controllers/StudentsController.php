<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentsController extends Controller
{
    //

    public function index(): View
    {
       $students = student::all();
       return view ('students.index')->with('students',$students);
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student Added Successfully!');  
    }

    public function show($id): View
    {
        $students = Student::find($id);
        return view('students.show')->with('students', $students);
    }

    public function edit($id): View
    {
        $students = Student::find($id);
        return view('students.edit')->with('students', $students);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $students = Student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('students')->with('flash_message', 'student record Updated successfully!'); 
    }

    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student record deleted successfully!');  
    }
}
