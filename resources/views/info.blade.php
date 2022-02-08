<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info</title>
</head>
<body>
    
    <div>
        <ul>
            @foreach ($texts as $text)
            <li>
                {{ $text }}
            </li>                
            @endforeach
        </ul>
    </div>
    <a href="{{ route('homepage') }}">homepage</a>

</body>
</html>