<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoo Information</title>
</head>
<body>
    <h1>Animals</h1>
    <ul>
        @foreach($animals as $animal)
            <li>{{ $animal->name }} - {{ $animal->species }}</li>
        @endforeach
    </ul>

    <h1>Employees</h1>
    <ul>
        @foreach($employees as $employee)
            <li>{{ $employee->name }} - {{ $employee->position }}</li>
        @endforeach
    </ul>
</body>
</html>
