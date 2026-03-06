@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        <h1>Aggiungi una Nuova Categoria</h1>

        <form action="{{ route('types.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome Categoria</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Es: Front-end, Back-end..." required>

            </div>

            <button type="submit" class="btn btn-primary">Salva Tipologia</button>
            <a href="{{ route('types.index') }}" class="btn btn-secondary">Annulla</a>


        </form>

    </div>
@endsection
