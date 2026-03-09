@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">
        <h1>Modifica un Linguaggio</h1>

        <form action="{{ route('technologies.update', $technology) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome Linguaggio</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $technology->name }}">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Colore Identificativo</label>
                <input type="color" class="form-control form-control-color" id="color" name="color"
                    value="{{ $technology->color }}" title="Scegli un colore">
            </div>

            <button type="submit" class="btn btn-success">Aggiorna Linguaggio</button>


        </form>

    </div>
@endsection
