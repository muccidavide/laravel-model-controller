<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <div class="container p-5 ">
        <div class="row justify-content-center"> 
        @forelse($movies as $movie)

            <div class="col-4">
            
                <div class="card_movie m-auto">
                    <img class="img-fluid w-100" src='https://picsum.photos/300/200' alt='default img'>
                    <div class="card_details">
                        <h3>{{ $movie['title'] }}</h3>
                        <p>{{ $movie['nationality'] }}</p>
                        <p>{{ $movie['date'] }}</p>
                        <p>{{ $movie['vote'] }}</p>
                    </div>

                </div>
            
            </div>
            @empty
            @endforelse
            
        </div>

    </div>

</body>

</html>