<!-- resources/views/study_programs/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Study Program Details</h1>

    <div class="mb-3">
        <strong>Name:</strong> {{ $studyProgram->name }} <br>
        <strong>Description:</strong> {{ $studyProgram->description }} <br>
        <strong>Capacity:</strong> {{ $studyProgram->capacity }} <br>
        <strong>Faculty:</strong> {{ $studyProgram->faculty->name }}
    </div>

    <a href="{{ route('study_programs.edit', $studyProgram->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('study_programs.destroy', $studyProgram->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
