@extends('templates.main')

@section('main-content')
<h2 class="my-4">Create a new Janitor</h2>
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>
        {{ $error }}
    </p>
    @endforeach
</div>

@endif

<form action=" {{ route('janitors.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="task" placeholder="Task">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="description" placeholder="Description">
    </div>
    <input class="btn btn-success my-3" type="submit" value="Create">
</form>

@endsection