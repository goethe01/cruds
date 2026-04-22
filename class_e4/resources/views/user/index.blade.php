<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>User list:</h1>
    <ul>
        @if ($users->isEmpty())
            <h3>The user list is empty</h3>
        @else
            @foreach($users as $user)
            <li>{{$user->name}} => {{$user->agge }}</li>
            @endforeach
        @endif
    </ul>
</body>
</html>
