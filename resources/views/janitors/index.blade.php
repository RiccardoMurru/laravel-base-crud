@extends('templates.main')

@section('main-content')
<h2 class="ml-5 my-4">Janitors</h2>

@foreach ($janitors as $janitor)
<ul class="list-group mb-3 w-50">
    <li class="list-group-item">
        <h2 class="text-info">{{ $janitor->name}} </h2>
    </li>
    <li class="list-group-item">
        {{ $janitor->task }}
    </li>
    <li class="list-group-item">
        {{ $janitor->description }}
    </li>
    <li class="list-group-item text-center">
        <a class="btn btn-info m-2" href="">Show</a>
        <a class="btn btn-primary m-2" href="">Edit</a>
        <a class="btn btn-danger m-2" href="">Delete</a>
    </li>

</ul>
@endforeach

@endsection