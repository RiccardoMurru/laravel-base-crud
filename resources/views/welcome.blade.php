@extends('templates.main')

@section('main-content')

<div class="card-group">
    <div class="card text-center">
        <div class="card-body">
            <h2>Students</h2>
            <a class="card-link" href="{{ route('students.index') }}">Go to Students Details</a>
        </div>
    </div>

    <div class="card text-center">
        <div class="card-body">
            <h2>Janitors</h2>
            <a class="card-link" href="{{ route('janitors.index') }}">Go to Janitors Details</a>
        </div>
    </div>
</div>
<div class="card-group">
    <div class="card text-center">
        <div class="card-body">
            <h2>Teachers</h2>
            <a class="card-link" href="{{ route('teachers.index') }}">Go to Teachers Details</a>
        </div>
    </div>
</div>

@endsection