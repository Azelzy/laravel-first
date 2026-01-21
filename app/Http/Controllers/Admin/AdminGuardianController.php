<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    // public function index() KODE AWAL
    // {
    //     $search = request('search');
    //     $guardians = Guardian::withCount('students')
    //         ->when($search, function ($query) use ($search) {
    //             return $query->where('name', 'like', '%' . $search . '%')
    //                 ->orWhere('email', 'like', '%' . $search . '%')
    //                 ->orWhere('phone', 'like', '%' . $search . '%');
    //         })
    //         ->get();
    //     return view('admin.guardians.index', compact('guardians', 'search'));
    // }

        public function index(Request $request)
{
    $search = $request->search ?? '';
    $guardians = Guardian::withCount('students')
        ->when(trim($search) !== '', function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('job', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%');
        })
        ->paginate(20)
        ->withQueryString();

    return view('admin.guardians.index', compact('guardians', 'search'));
}

    public function create()
    {
        return view('admin.guardians.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email',
            'address' => 'nullable|string'
        ]);

        Guardian::create($validated);

        return redirect('/admin/guardians')->with('success', 'Guardian created successfully');
    }

    public function edit($id)
    {
        $guardian = Guardian::findOrFail($id);
        return view('admin.guardians.edit', compact('guardian'));
    }

    public function update(Request $request, $id)
    {
        $guardian = Guardian::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email,' . $id,
            'address' => 'nullable|string'
        ]);

        $guardian->update($validated);

        return redirect('/admin/guardians')->with('success', 'Guardian updated successfully');
    }

    public function destroy($id)
    {
        $guardian = Guardian::findOrFail($id);
        
        if ($guardian->students()->count() > 0) {
            return redirect('/admin/guardians')->with('error', 'Cannot delete guardian with students');
        }
        
        $guardian->delete();

        return redirect('/admin/guardians')->with('success', 'Guardian deleted successfully');
    }
}