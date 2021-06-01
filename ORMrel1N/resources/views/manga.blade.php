@extends('layout.layout')

@section('titrePage')
    Information sur le Manga
@endsection

@section('contenu')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset($path)}}">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Titre : {{$manga->titre}}</h5>
                    <p>Dessinateur : {{$dessinateur->nom_dessinateur .' '. $dessinateur->prenom_dessinateur}}</p>
                    <p>Scénariste : {{$scenariste->nom_scenariste .' '. $scenariste->prenom_scenariste}}</p>
                    <p>Genre : {{$genre->lib_genre}}</p>
                    <p>Prix : {{$manga->prix}}</p>
                    </div>
            </div>
        </div>
    </div>
@endsection