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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('students.index') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Janitors</a>
                </li>
            </ul>
        </nav>
    </header>