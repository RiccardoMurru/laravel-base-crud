<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Students</h1>

    @foreach ($students as $student)
    <div class="student">
        <h4> {{ $student->name }}</h4>
        <h5> {{ $student->email }}</h5>
        <p> {{ $student->description }} </p>
    </div>

    @endforeach
</body>

</html>