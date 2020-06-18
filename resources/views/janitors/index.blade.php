@extends('templates.main')

@section('main-content')

@if (session('deleted'))
<div class="alert alert-danger w-75 mx-auto text-center">
    {{ session('deleted') }}: you're fired!
</div>
@endif

<div class="text-center ml-5 mb-5 d-flex justify-content-around align-items-center ">

    <h2 class="m-2">Janitors</h2>
    <a class="btn btn-primary" href="{{ route('janitors.create')}}">Add a new janitor</a>
</div>

@foreach ($janitors as $janitor)
<ul class="list-group mb-3 w-75 mx-auto">
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
        <a class="btn btn-info m-2" href="{{ route('janitors.show', $janitor->id) }}">Show</a>
        <a class="btn btn-primary m-2" href="{{ route('janitors.edit', $janitor->id) }}">Edit</a>
        <form class="d-inline-block" action="{{ route('janitors.destroy', $janitor->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Delete">
        </form>
    </li>

</ul>
@endforeach

@endsection