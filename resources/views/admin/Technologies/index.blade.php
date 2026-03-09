@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Lista Linguaggi</h1>
            <a href="{{ route('technologies.create') }}" class="btn btn-primary">Aggiungi un Linguaggio</a>

        </div>

        <table class="table table-striped table-hover border">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Anteprima Colore</th>
                    <th scope="col">Azioni</th>
                </tr>

            </thead>

            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <td>{{ $technology->id }}</td>
                        <td>{{ $technology->name }}</td>
                        <td>
                            <span class="badge" style="background-color: {{ $technology->color }}; color:white;">
                                {{ $technology->color }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2 ">
                                <a href="{{ route('technologies.show', $technology) }}"
                                    class="btn btn-sm btn-info text-white">
                                    Dettagli
                                </a>
                                <a href="{{ route('technologies.edit', $technology) }}" class="btn btn-sm btn-warning">
                                    Modifica
                                </a>

                                {{-- form x eliminazione --}}

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
@endsection
