@extends('layouts.app')

@section('content')


<div class="container p-5 ">
    <div class="title text-center">
    <h1>The Movie DB</h1>

    </div>

        <div class="row justify-content-center"> 
        @forelse($movies as $movie)

            <div class="col-4 g-3">
            
                <div class="card_movie m-auto">
                    <img class="img-fluid w-100" src='https://picsum.photos/300/200' alt='default img'>
                    <div class="card_details p-2 mt-2">
                        <h3>{{ $movie['title'] }}</h3>
                        <p><strong>Nation: </strong>{{ $movie['nationality'] }}</p>
                        <p><strong>Date: </strong>{{ $movie['date'] }}</p>
                        <p><strong>Vote: </strong>{{ $movie['vote'] }}</p>
                    </div>

                </div>
            
            </div>
            @empty
            @endforelse
            
        </div>

    </div>
    @endsection
