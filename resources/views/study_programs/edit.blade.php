<!-- resources/views/study_programs/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Study Program</h1>

    <form action="{{ route('study_programs.update', $studyProgram->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $studyProgram->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $studyProgram->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="capacity">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $studyProgram->capacity }}">
        </div>
        <div class="form-group">
            <label for="faculty_id">Faculty</label>
            <select class="form-control" id="faculty_id" name="faculty_id">
                @foreach ($faculties as $faculty)
                    <option value="{{ $faculty->id }}" {{ $faculty->id == $studyProgram->faculty_id ? 'selected' : '' }}>
                        {{ $faculty->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
