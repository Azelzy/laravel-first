<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('admin.teachers.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:teachers,email',
            'address' => 'required|string'
        ]);

        Teacher::create($validated);

        return redirect('/admin/teachers')->with('success', 'Teacher created successfully');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $subjects = Subject::all();
        return view('admin.teachers.edit', compact('teacher', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:teachers,email,' . $id,
            'address' => 'required|string'
        ]);

        $teacher->update($validated);

        return redirect('/admin/teachers')->with('success', 'Teacher updated successfully');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect('/admin/teachers')->with('success', 'Teacher deleted successfully');
    }
}