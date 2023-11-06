<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        return view('faculties.index', compact('faculties'));
    }

    public function create()
    {
        return view('faculties.create');
    }

    public function store(Request $request)
    {
        Faculty::create($request->all());
        return redirect()->route('faculties.index');
    }

    public function show($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('faculties.show', compact('faculty'));
    }

    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('faculties.edit', compact('faculty'));
    }

    public function update(Request $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->update($request->all());
        return redirect()->route('faculties.index');
    }

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
        return redirect()->route('faculties.index');
    }

    
}
