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
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-start">
                    <img class="card-img-top" src="{{$travel->image}}" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">{{$travel->location}}</h4>
                        <p class="card-text">{{$travel->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>