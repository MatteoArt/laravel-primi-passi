<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel Application</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav>
        @foreach ($navlinks as $link)
            @if ($loop->first)
                <div>
                    <a class="active">{{ $link }}</a>
                </div>
            @else
                <div>
                    <a>{{ $link }}</a>
                </div>
            @endif
        @endforeach
    </nav>
    <h1>First Laravel Application</h1>
    <div class="container">
        <h2>Benvenuto <span class="red">{{ $name }} {{ $surname }}</span></h2>
        <div class="mail">La tua mail è: <span class="important">{{ $mail }}</span></div>
    </div>
</body>

</html>
