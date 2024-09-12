<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;


class CourseController extends Controller
{
    public function index(): View
    {
       $courses = Course::all();
       return view ('courses.index')->with('courses',$courses);
    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'Course Added Successfully!');  
    }

    public function show($id): View
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    public function edit($id): View
    {
        $courses = Course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'courses record Updated successfully!'); 
    }

    public function destroy(string $id): RedirectResponse
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'courses record deleted successfully!');  
    }
}

