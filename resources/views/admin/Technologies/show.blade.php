@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center gap-3 mb-4">
            <h1>Tecnologia: {{ $technology->name }}</h1>
            <span class="badge rounded-pill"
                style="background-color: {{ $technology->color }}; width: 30px; height: 30px; display: inline-block;">
            </span>
        </div>

        <h3>Progetti correlati:</h3>
        @if ($technology->projects->count() > 0)
            <ul class="list-group">
                @foreach ($technology->projects as $project)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $project->project_name }}
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-primary">Vedi
                            Progetto</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">Nessun progetto utilizza ancora questa tecnologia.</p>
        @endif

        <div class="mt-4">
            <a href="{{ route('technologies.index') }}" class="btn btn-secondary">Torna alla lista</a>
        </div>

    </div>
@endsection
