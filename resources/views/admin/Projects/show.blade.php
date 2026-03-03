@extends('admin.layouts.app')
@section('content')
    <div class="container mt-4">
        <h1 class="title text-dark">{{ $project->project_name }}</h1>
        {{-- <p class="badge bg-info text-dark">{{ $project->type }}</p> --}}
        <p class="card-text">{{ $project->overview }}</p>


        <div class="d-flex justify-content-between py-4 ">

            <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">Torna a Progetti</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

        </div>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il Progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Vuoi eliminare definitivamente il progetto?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" class="btn btn-danger" value="Elimina">
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
