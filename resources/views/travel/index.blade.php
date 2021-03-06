@extends('layouts.app');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
</head>

<body>
    @section ('content')
    <h1>Scegli una delle nostre destinazioni</h1>
    <div class="container">
        <div class="row row-cols-2 g-3">
            @foreach ($travels as $travel)
            <div class="col">
                <a href="{{route('travel.show', $travel)}}">
                    <div class="card text-start">
                      <img class="card-img-top img_size" src="{{$travel->image}}" alt="Title">
                      <div class="card-body">
                        <h4 class="card-title">{{$travel->location}}</h4>
                        <p class="card-text">{{$travel->description}}</p>
                      </div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>