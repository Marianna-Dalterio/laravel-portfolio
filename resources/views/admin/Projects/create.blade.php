@extends("admin.layouts.app")
@section("content")
<form action="{{route("projects.store")}}" method="POST">
@csrf


</form>
@endsection