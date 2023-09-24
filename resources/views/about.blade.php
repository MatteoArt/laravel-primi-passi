<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav>
        @foreach ($navlinks as $link)
            @if ($link === 'About Us')
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
        <p style="font-size: 15px;margin-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Maiores molestiae nulla perferendis nam quisquam, qui necessitatibus quidem
            itaque, incidunt tenetur alias! Quam maxime laborum hic deserunt! Error itaque
            recusandae placeat.</p>
    </div>
</body>

</html>
