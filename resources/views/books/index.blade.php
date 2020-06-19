@extends('templates.main')

@section('main-content')

<div class="text-center ml-5 mb-5 d-flex justify-content-around align-items-center ">

    <h2 class="m-2">Books</h2>
</div>

@foreach ($books as $book)
<ul class="list-group mb-3 w-75 mx-auto">
    <li class="list-group-item">
        <h2 class="text-info">{{ $book->title}} </h2>
    </li>
    <li class="list-group-item">
        Author: {{ $book->author }}
    </li>
    <li class="list-group-item">
        Editor: {{ $book->editor }}
    </li>
    <li class="list-group-item">
        Pages: {{ $book->pages }}
    </li>
    <li class="list-group-item">
        Plot: {{ $book->plot }}
    </li>

</ul>
@endforeach

@endsection