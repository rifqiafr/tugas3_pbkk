<!-- resources/views/study_programs/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Add Study Program</h1>

    <form action="{{ route('study_programs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="capacity">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity">
        </div>
        <div class="form-group">
            <label for="faculty_id">Faculty</label>
            <select class="form-control" id="faculty_id" name="faculty_id">
                @foreach ($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
