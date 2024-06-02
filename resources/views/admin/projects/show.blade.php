@extends('layouts.admin')

@section('content')
    <div>
        <h2>
            {{ $project->name }}
        </h2>
        <div>
            <strong>ID: </strong>{{ $project->id }}
        </div>
        <div>
            <strong>Created: </strong>{{ $project->created_at }}
        </div>
        <div>
            <strong>Updated: </strong>{{ $project->updated_at }}
        </div>
        <div>
            <strong>Client Name: </strong>{{ $project->client_name }}
        </div>
        <div>
            <strong>Slug: </strong>{{ $project->slug }}
        </div>
        <div>
            <strong>Summary: </strong>
            <p>{{ $project->summary }}</p>
        </div>
        <div>
            <a href="{{ route('admin.projects.index') }}">Torna alla lista</a>
            <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Edit</a>
        </div>
        <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
