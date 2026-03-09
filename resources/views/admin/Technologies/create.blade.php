@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        <h1>Aggiungi un nuovo Linguaggio</h1>

        <form action="{{ route('technologies.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome Linguaggio</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Colore Identificativo</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#000000"
                    title="Scegli un colore">
            </div>

            <button type="submit" class="btn btn-success">Crea Linguaggio</button>


        </form>

    </div>
@endsection
