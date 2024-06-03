@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    @foreach ($projects as $project)
        <div class="my-5">
            <div>
                <strong>ID: </strong>{{ $project->id }}
            </div>
            <div>
                <strong>Name: </strong>{{$project->name}}
            </div>
            <div>
                <strong>Client Name: </strong>{{$project->client_name}}
            </div>
            <div>
                <strong>Slug: </strong>{{$project->slug}}
            </div>
            <div>
                <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Info</a>
                <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">Edit</a>
                <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            <hr>
        </div>
    @endforeach
@endsection
