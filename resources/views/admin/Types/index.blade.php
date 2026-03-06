@extends('admin.layouts.app');
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

                        </td>
                    </tr>
                @endforeach


            </tbody>



        </table>


    </div>
@endsection
