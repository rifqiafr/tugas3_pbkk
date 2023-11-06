<!-- resources/views/study_programs/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">List of Study Programs</h1>

    <a href="{{ route('study_programs.create') }}" class="btn btn-primary mb-3">Add Study Program</a>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Capacity</th>
                    <th>Faculty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studyPrograms as $studyProgram)
                    <tr>
                        <td>{{ $studyProgram->name }}</td>
                        <td>{{ $studyProgram->description }}</td>
                        <td>{{ $studyProgram->capacity }}</td>
                        <td>{{ $studyProgram->faculty->name }}</td>
                        <td>
                            <a href="{{ route('study_programs.show', $studyProgram->id) }}"
                                class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('study_programs.edit', $studyProgram->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('study_programs.destroy', $studyProgram->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
