<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav>
        @foreach ($navlinks as $link)
            @if ($loop->last)
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
    <div class="container">
        <h3> {{ $namePage }} </h3>
        <p style="font-size: 15px;margin-top: 15px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae iusto, magni dolores quae
            deleniti eius dolorem sunt facilis ipsam mollitia excepturi facere aliquam laudantium quia maiores quas
            voluptas nostrum!
        </p>
    </div>
</body>

</html>
