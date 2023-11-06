@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Welcome to Our University</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Faculties</h2>
                <ul class="list-group">
                    @foreach ($faculties as $faculty)
                        <li class="list-group-item">{{ $faculty->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Study Programs</h2>
                <ul class="list-group">
                    @foreach ($studyPrograms as $studyProgram)
                        <li class="list-group-item">{{ $studyProgram->name }} ({{ $studyProgram->faculty->name }})</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
