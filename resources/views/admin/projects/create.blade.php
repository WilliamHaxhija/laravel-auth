@extends('layouts.admin')

@section('content')
    <h2>Create a new Project</h2>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="exampleInput" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="exampleInput" name="client_name">
            @error('client_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating mt-4">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="summary"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Summary </label>
                @error('summary')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('admin.projects.index') }}">Torna alla lista</a>
    </form>
@endsection
