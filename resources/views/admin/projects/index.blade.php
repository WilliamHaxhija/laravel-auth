@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    @foreach ($projects as $project)
        <div class="my-3">
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
                <strong>Summary: </strong>{{$project->summary}}
            </div>
        </div>
    @endforeach
@endsection
