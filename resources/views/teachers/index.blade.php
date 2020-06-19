@extends('templates.main')

@section('main-content')

<div class="text-center ml-5 mb-5 d-flex justify-content-around align-items-center ">

    <h2 class="m-2">Teachers</h2>
</div>

@foreach ($teachers as $teacher)
<ul class="list-group mb-3 w-75 mx-auto">
    <li class="list-group-item">
        <h2 class="text-info">{{ $teacher->name}} </h2>
    </li>
    <li class="list-group-item">
        Birth date: {{ $teacher->birthdate }}
    </li>
    <li class="list-group-item">
        E-mail: {{ $teacher->email }}
    </li>
    <li class="list-group-item">
        {{ $teacher->description }}
    </li>

</ul>
@endforeach

@endsection