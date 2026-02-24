@extends("admin.layouts.app")
@section("content")
<div class="container mt-4">
    <h1>Tutti i tuoi progetti</h1>

    <!--iterazione x card!-->
    <div class="row mt-4">
        @foreach ($projects as $project )

        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-dark"> {{$project->project_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Cliente: {{ $project->client }}</h6>
                    <p class="card-text text-secondary small">Data: {{ $project->date }}</p>
                    <p class="card-text">{{ $project->overview }}</p>

                </div>

                <div class="card-footer bg-transparent border-top-0">
                    <a href="#" class="btn btn-outline-primary btn-sm">Dettagli</a>
                </div>

            </div>

        </div>
            
        @endforeach
        

    </div>
</div>
@endsection