@extends('layout.layout')

@push('css')
    <link rel="stylesheet" href="css/mangas.css">
@endpush

@section('titrePage')
    Information sur le Manga
@endsection

@section('contenu')
    <div class="card">
        <header class="class-header">
            <h5 class="card-header-title">Titre : {{$manga->titre}}</h5>
        </header>
        <div class="card">
            <div class="content">
                <p>Dessinateur : {{$manga->nomDessinateur}}</p>
                <p>Scénariste : {{$manga->nomScenariste}}</p>
                <p>Genre : {{$manga->genre}}</p>
                <hr>
                <p>Prix : {{$manga->prix}}</p>
            </div>
        </div>
    </div>
@endsection