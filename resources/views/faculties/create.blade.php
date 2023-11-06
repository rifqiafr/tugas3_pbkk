<!-- resources/views/faculties/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Add Faculty</h1>

    <form action="{{ route('faculties.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
