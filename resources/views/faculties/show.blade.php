@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Faculty Details</h1>

        <div class="mb-3">
            <strong class="d-block">Name:</strong> {{ $faculty->name }} <br>
            <strong class="d-block mt-2">Description:</strong> {{ $faculty->description }}
        </div>

        <h2 class="mt-4">Study Programs</h2>
        <ul class="list-group">
            @foreach ($faculty->studyPrograms as $studyProgram)
                <li class="list-group-item">{{ $studyProgram->name }} - {{ $studyProgram->description }}</li>
            @endforeach
        </ul>

        <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-warning mt-4">Edit</a>

        <form action="{{ route('faculties.destroy', $faculty->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-4">Delete</button>
        </form>
    </div>
@endsection
