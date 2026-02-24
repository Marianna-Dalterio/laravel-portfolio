@extends("admin.layouts.app")
@section("content")
<div class="container mt-4">
    <h1 class="title text-dark">{{$project->project_name}}</h1>
    <p class="card-text">{{ $project->overview }}</p>


</div>
@endsection