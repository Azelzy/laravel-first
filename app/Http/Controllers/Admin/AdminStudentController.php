<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    // public function index() KODE AWAL
    // {
    //     $search = request('search');
    //     $students = Student::with(['classroom', 'guardian'])
    //         ->when($search, function ($query) use ($search) {
    //             return $query->where('name', 'like', '%' . $search . '%')
    //                 ->orWhere('email', 'like', '%' . $search . '%');
    //         })
    //         ->get();
    //     return view('admin.students.index', compact('students', 'search'));
    // }

        public function index(Request $request)
{
    $search = $request->search ?? '';
    $students = Student::with(['classroom', 'guardian'])
        ->when(trim($search) !== '', function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhereHas('classroom', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })
                ->orWhereHas('guardian', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
        })
        ->paginate(5)
        ->withQueryString();

    return view('admin.students.index', compact('students', 'search'));
}

    public function create()
    {
        $classrooms = Classroom::all();
        $guardians = Guardian::all();
        return view('admin.students.create', compact('classrooms', 'guardians'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'classroom_id' => 'nullable|exists:classrooms,id',
            'guardian_id' => 'nullable|exists:guardians,id',
            'gender' => 'required|in:L,P',
            'birth_date' => 'required|date',
            'address' => 'nullable|string'
        ]);

        Student::create($validated);

        return redirect('/admin/students')->with('success', 'Student created successfully');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $classrooms = Classroom::all();
        $guardians = Guardian::all();
        return view('admin.students.edit', compact('student', 'classrooms', 'guardians'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'classroom_id' => 'nullable|exists:classrooms,id',
            'guardian_id' => 'nullable|exists:guardians,id',
            'gender' => 'required|in:L,P',
            'birth_date' => 'required|date',
            'address' => 'nullable|string'
        ]);

        $student->update($validated);

        return redirect('/admin/students')->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/admin/students')->with('success', 'Student deleted successfully');
    }
}