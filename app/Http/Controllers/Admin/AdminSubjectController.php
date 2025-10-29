<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminSubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::withCount('teachers')->get();
        return view('admin.subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('admin.subjects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
            'description' => 'nullable|string'
        ]);

        Subject::create($validated);

        return redirect('/admin/subjects')->with('success', 'Subject created successfully');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('admin.subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name,' . $id,
            'description' => 'nullable|string'
        ]);

        $subject->update($validated);

        return redirect('/admin/subjects')->with('success', 'Subject updated successfully');
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        
        if ($subject->teachers()->count() > 0) {
            return redirect('/admin/subjects')->with('error', 'Cannot delete subject with teachers');
        }
        
        $subject->delete();

        return redirect('/admin/subjects')->with('success', 'Subject deleted successfully');
    }
}