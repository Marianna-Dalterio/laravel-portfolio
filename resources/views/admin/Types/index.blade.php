@extends('admin.layouts.app')
@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Tutte le categorie</h1>
            <a href="{{ route('types.create') }}" class="btn btn-primary">Aggiungi Una Categoria</a>
        </div>

        <table class="table table-striped table-hover">

            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Azioni</th>
                </tr>

            </thead>


            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>

                        <td>
                            <a href="{{ route('types.show', $type) }}" class="btn btn-sm btn-info text-white">Dettagli</a>
                            <a href="{{ route('types.edit', $type) }}" class="btn btn-sm btn-warning">Modifica</a>

                            {{-- Form per eliminazione --}}


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $type->id }}">
                                Elimina
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $type->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina la Categoria</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            Vuoi eliminare definitivamente la categoria
                                            <strong>{{ $type->name }}</strong>?
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>

                                            <form action="{{ route('types.destroy', $type) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Elimina">
                                            </form>

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
