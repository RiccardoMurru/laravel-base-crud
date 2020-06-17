@extends('templates.main')

@section('main-content')
<h2 class="my-4">Students</h2>
@foreach ($students as $student)
<div class="student">
    <h4> {{ $student->name }}</h4>
    <h5> {{ $student->email }}</h5>
    <p> {{ $student->description }} </p>
</div>

@endforeach

@endsection