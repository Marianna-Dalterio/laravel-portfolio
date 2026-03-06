@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">

        <div class="mb-4">
            <a href="{{ route('types.index') }}" class="btn btn-secondary">Torna alla lista</a>
        </div>

        <div class="card">
            <div class="card-header bg-dark text-white">
                <h2 class="mb-0"> {{ $type->name }}</h2>
            </div>

            <div class="card-body">
                <p><strong>ID:</strong> {{ $type->id }}</p>
                <p><strong>Nome:</strong> {{ $type->name }}</p>


                <hr>

                <h4>Statistiche</h4>
                <p>
                    <strong>Numero di progetti associati:</strong>
                    <span class="badge bg-primary fs-6">
                        {{-- Uso il nome della funzione definita nel  Model Type --}}
                        {{ count($type->projects) }}
                    </span>
                </p>

                @if (count($type->projects) > 0)
                    <h5>Elenco Progetti:</h5>
                    <ul class="list-group">
                        @foreach ($type->projects as $project)
                            <li class="list-group-item">
                                <a href="{{ route('projects.show', $project) }}">
                                    {{ $project->project_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">Nessun progetto associato a questa categoria.</p>
                @endif
            </div>
        </div>

    </div>
@endsection
