@extends('templates.main')

@section('main-content')
<h2 class="my-4">Edit Janitor</h2>
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>
        {{ $error }}
    </p>
    @endforeach
</div>

@endif

<form action=" {{ route('janitors.update', $janitor->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ $janitor->name }}">
    </div>
    <div class="form-group">
        <label for="task">Task</label>
        <input class="form-control" type="text" name="task" id="task" placeholder="Task" value="{{ $janitor->task }}">
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <input class="form-control" type="text" name="description" id="description" placeholder="Description"
            value="{{ $janitor->description }}">
    </div>
    <input class="btn btn-success my-3" type="submit" value="Update">
</form>

@endsection