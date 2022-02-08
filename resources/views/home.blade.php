<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello laravel</title>
</head>
<body>
    {{-- Header --}}
    <header>
        <ul>
            <li>
                <a href="{{ route('info') }}">Info</a>
            </li>
            <li>
                <a href="{{ route('faq') }}">Faq</a>
            </li>
            <li>
                <a href="{{ route('learn') }}">Learn more</a>
            </li>
        </ul>
    </header>
    {{-- Hello with variables in web.php --}}
    <div>
        Hello {{ $name }} {{ $lastname }}
    </div>
</body>
</html>