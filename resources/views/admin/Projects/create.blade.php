@extends('admin.layouts.app')
@section('content')
    <div class="container py-5">

        <div class="row justify-content-center">


            <div class="col-md-8 col-lg-6">

                <h2 class="mb-4">Aggiungi Nuovo Progetto</h2>


                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="project_name" class="form-label fw-bold">Nome Progetto
                            <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" id="project_name" name="project_name" required>
                    </div>


                    <div class="mb-3">
                        <label for="client" class="form-label fw-bold">Cliente
                            <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" id="client" name="client" required>
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label">Tipologia</label>
                        <select class="form-select" name="type_id" id="type_id">
                            <option value="">Seleziona una tipologia</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label fw-bold">Periodo</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label for="overview" class="form-label fw-bold">Riassunto</label>
                        <textarea class="form-control" id="overview" name="overview" rows="3"></textarea>
                    </div>


                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salva Progetto</button>
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Annulla</a>
                    </div>



                </form>

            </div>




        </div>


    </div>
@endsection
