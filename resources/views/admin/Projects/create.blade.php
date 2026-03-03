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
                        <input type="text" class="form-control" id="project_name" name="project_name">
                    </div>


                    <div class="mb-3">
                        <label for="client" class="form-label fw-bold">Cliente
                            <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" id="client" name="client">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="type" class="form-label fw-bold">Tipologia Progetto</label>
                        <select class="form-select" id="type" name="type">
                            <option value="" selected>Seleziona una tipologia</option>
                            <option value="Front-end">Front-end</option>
                            <option value="Back-end">Back-end</option>
                            <option value="Fullstack">Fullstack</option>
                            <option value="Design">Design</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div> --}}

                    <div class="mb-3">
                        <label for="date" class="form-label fw-bold">Periodo</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label for="overview" class="form-label fw-bold">Riassunto</label>
                        <textarea class="form-control" id="overview" name="overview" rows="3"></textarea>
                    </div>


                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Salva Progetto</button>
                    </div>

                </form>

            </div>




        </div>


    </div>
@endsection
