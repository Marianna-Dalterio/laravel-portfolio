<!--ricopio il contenuto della rotta create e vado a modificare i campi del form affinchè non compaiano vuoti, poi l'action e il metodo '!-->

@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">

        <div class="row justify-content-center">


            <div class="col-md-8 col-lg-6">

                <h2 class="mb-4">Modifica Un Progetto</h2>


                <form action="{{ route('projects.update', $project) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="project_name" class="form-label fw-bold">Nome Progetto</label>
                        <input type="text" class="form-control" id="project_name" name="project_name"
                            value="{{ $project->project_name }}">
                    </div>


                    <div class="mb-3">
                        <label for="client" class="form-label fw-bold">Cliente</label>
                        <input type="text" class="form-control" id="client" name="client"
                            value="{{ $project->client }}">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label fw-bold">Periodo</label>
                        <input type="text" class="form-control" id="date" name="date"
                            value="{{ $project->date }}">
                    </div>

                    <div class="mb-3">
                        <label for="overview" class="form-label fw-bold">Riassunto</label>
                        <textarea class="form-control" id="overview" name="overview" rows="3">{{ $project->overview }}</textarea>
                    </div>


                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
                    </div>

                </form>

            </div>




        </div>


    </div>
@endsection
