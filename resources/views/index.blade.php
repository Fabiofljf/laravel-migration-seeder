@extends('layouts.app')

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
    <section id="jumbotron">
        
    </section>
    <!-- /.jumbotron -->

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <h1>Scopri tutti i viaggi vacanze disponibili</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione sequi at ex perferendis eaque ad iusto dignissimos, rem aspernatur autem tempore voluptatem voluptatum error cumque molestias. Distinctio, alias. Deserunt magnam aut sed error eveniet excepturi accusantium nihil molestias consequuntur, libero, repudiandae commodi, asperiores laborum beatae. Officiis id voluptatum aliquid quibusdam.</p>
                    <h4>Entra in Travellando!</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- /#intro -->

    @endsection
</body>

</html>