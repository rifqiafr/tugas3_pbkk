<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyProgram;
use App\Models\Faculty;

class StudyProgramController extends Controller
{
    public function index()
    {
        $studyPrograms = StudyProgram::all();
        return view('study_programs.index', compact('studyPrograms'));
    }

    public function create()
    {
        $faculties = Faculty::all();
        return view('study_programs.create', compact('faculties'));
    }

    public function store(Request $request)
    {
        StudyProgram::create($request->all());
        return redirect()->route('study_programs.index');
    }

    public function show($id)
    {
        $studyProgram = StudyProgram::findOrFail($id);
        return view('study_programs.show', compact('studyProgram'));
    }

    public function edit($id)
    {
        $studyProgram = StudyProgram::findOrFail($id);
        $faculties = Faculty::all();
        return view('study_programs.edit', compact('studyProgram', 'faculties'));
    }

    public function update(Request $request, $id)
    {
        $studyProgram = StudyProgram::findOrFail($id);
        $studyProgram->update($request->all());
        return redirect()->route('study_programs.index');
    }

    public function destroy($id)
    {
        $studyProgram = StudyProgram::findOrFail($id);
        $studyProgram->delete();
        return redirect()->route('study_programs.index');
    }
}
