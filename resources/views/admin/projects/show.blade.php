@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
        <div class="card-body">
            <h5 class="card-title">Titolo: {{ $project->title }}</h5>
            <p class="card-text">Descrizione: {{ $project->description }}</p>
            <small>Cliente: {{ $project->client }}</small>
            <br>
            <small>Data d'inizio:{{ $project->start_date }}</small>
            <br>
            <small>Data fine:{{ $project->end_date }}</small>
            <br>
            <small>Url: {{ $project->project_url }}</small>
            <br>
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary"><i
                    class="fa-solid fa-pencil"></i></a>
            <form class="d-inline" action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                onsubmit="return confirm('Vuoi eliminare')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>

        </div>
    </div>
@endsection
