<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School DB crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('home.index') }}">School DB</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('janitors.index') }}">Janitors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">Books</a>
                </li>
            </ul>
        </nav>
    </header>