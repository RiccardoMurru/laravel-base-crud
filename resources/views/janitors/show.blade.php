@extends('templates.main')

@section('main-content')
<div class="text-center ml-5 mb-5 d-flex justify-content-around align-items-center ">
    <h2 class="m-2">Janitor {{ $janitor->name }} details</h2>
    <a class="btn btn-primary" href="{{ route('janitors.create')}}">Add a new janitor</a>
</div>

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
        <a class="btn btn-info m-2" href="{{ route('janitors.index')}}">Back to list</a>
        <a class="btn btn-primary m-2" href="#">Edit</a>
        <a class="btn btn-danger m-2" href="#">Delete</a>
    </li>

</ul>

@endsection