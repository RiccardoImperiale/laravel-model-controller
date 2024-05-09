<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies List</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1>Movies</h1>
    <div class="container">
        @forelse ($movies as $movie)
            <div class="movie">
                <div class="top">
                    <h2><span>#</span> {{ $movie->title }}</h2>
                    <h5><span>Original Name:</span> {{ $movie->original_title }}</h5>
                </div>
                <div class="bottom">
                    <h6><span>Nationality: </span>{{ $movie->nationality }}</h6>
                    <h6><span>Date: </span>{{ $movie->date }}</h6>
                    <h6><span>Vote: </span>{{ $movie->vote }}</h6>
                </div>
            </div>
        @empty
            <p>Sorry, no movies to be found...</p>
        @endforelse
    </div>

</body>

</html>
