<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    // public function index() KODE AWAL
    // {
    //     $classrooms = Classroom::withCount('students')->ordered()->get();
    //     return view('admin.classrooms.index', compact('classrooms'));
    // }

        public function index(Request $request)
{
    $search = $request->search ?? '';
    $classrooms = Classroom::withCount('students')
        ->when(trim($search) !== '', function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })
        ->ordered()
        ->paginate(5)
        ->withQueryString();

    return view('admin.classrooms.index', compact('classrooms', 'search'));
}

    public function create()
    {
        return view('admin.classrooms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classrooms,name'
        ]);

        Classroom::create($validated);

        return redirect('/admin/classrooms')->with('success', 'Classroom created successfully');
    }

    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('admin.classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classrooms,name,' . $id
        ]);

        $classroom->update($validated);

        return redirect('/admin/classrooms')->with('success', 'Classroom updated successfully');
    }

    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        
        if ($classroom->students()->count() > 0) {
            return redirect('/admin/classrooms')->with('error', 'Cannot delete classroom with students');
        }
        
        $classroom->delete();

        return redirect('/admin/classrooms')->with('success', 'Classroom deleted successfully');
    }
}