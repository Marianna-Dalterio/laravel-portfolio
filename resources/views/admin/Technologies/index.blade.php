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


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $technology->id }}">
                                    Elimina
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $technology->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il Linguaggio
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                Vuoi eliminare definitivamente il linguaggio
                                                <strong>{{ $technology->name }}</strong>?
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Annulla</button>

                                                <form action="{{ route('technologies.destroy', $technology) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
@endsection
