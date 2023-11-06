<!-- resources/views/faculties/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">List of Faculties</h1>

    <a href="{{ route('faculties.create') }}" class="btn btn-primary mb-3">Add Faculty</a>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faculties as $faculty)
                    <tr>
                        <td>{{ $faculty->name }}</td>
                        <td>{{ $faculty->description }}</td>
                        <td>
                            <a href="{{ route('faculties.show', $faculty->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('faculties.destroy', $faculty->id) }}" method="POST"
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
