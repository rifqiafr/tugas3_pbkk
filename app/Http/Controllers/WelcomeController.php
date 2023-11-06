<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\StudyProgram;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $faculties = Faculty::all(); // Mengambil data fakultas
        $studyPrograms = StudyProgram::all(); // Mengambil data program studi
    
        return view('welcome', compact('faculties', 'studyPrograms'));
    }
    
}


