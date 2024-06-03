@extends('layouts.admin')

@section('content')
    <h2 class="my-3">Edit Project</h2>

    <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Project Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                value="{{ old('name', $project->name) }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="exampleInput" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="exampleInput" name="client_name"
                value="{{ old('client_name', $project->client_name) }}">
                @error('client_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating mt-4">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="summary"
                    style="height: 100px">{{ old('title', $project->summary) }}</textarea>
                <label for="floatingTextarea2">Summary </label>
                @error('summary')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-up"></i></button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true"><i class="fa-regular fa-rectangle-list"></i></a>
    </form>
@endsection
