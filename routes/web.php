<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\WelcomeController;

// Rute untuk Fakultas
Route::get('faculties', [FacultyController::class, 'index'])->name('faculties.index');
Route::get('faculties/create', [FacultyController::class, 'create'])->name('faculties.create');
Route::post('faculties', [FacultyController::class, 'store'])->name('faculties.store');
Route::get('faculties/{faculty}', [FacultyController::class, 'show'])->name('faculties.show');
Route::get('faculties/{faculty}/edit', [FacultyController::class, 'edit'])->name('faculties.edit');
Route::put('faculties/{faculty}', [FacultyController::class, 'update'])->name('faculties.update');
Route::delete('faculties/{faculty}', [FacultyController::class, 'destroy'])->name('faculties.destroy');

// Rute untuk Program Studi
Route::get('study_programs', [StudyProgramController::class, 'index'])->name('study_programs.index');
Route::get('study_programs/create', [StudyProgramController::class, 'create'])->name('study_programs.create');
Route::post('study_programs', [StudyProgramController::class, 'store'])->name('study_programs.store');
Route::get('study_programs/{study_program}', [StudyProgramController::class, 'show'])->name('study_programs.show');
Route::get('study_programs/{study_program}/edit', [StudyProgramController::class, 'edit'])->name('study_programs.edit');
Route::put('study_programs/{study_program}', [StudyProgramController::class, 'update'])->name('study_programs.update');
Route::delete('study_programs/{study_program}', [StudyProgramController::class, 'destroy'])->name('study_programs.destroy');

Route::get('/', [WelcomeController::class, 'welcome'])->name('home');
Route::get('/welcome', [WelcomeController::class, 'welcome']);
