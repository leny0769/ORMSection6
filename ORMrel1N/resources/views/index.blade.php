@extends('layout.layout')

@push('css')
            <link rel="stylesheet" href="css/mangas.css">
@endpush

@section('titrePage')
    Liste des Mangas
@endsection

@section('titreItem')
    <h1>Tous les mangas :</h1>
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nous avons sélectionné pour vous :</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Genre</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($mangas as $manga)
                        <tr>
                            <td> {{ $manga->id }} </td>
                            <td><strong>{{ $manga->titre }}</strong></td>
                            <td> {{ $manga->genre->lib_genre }} </td>
                            <td> <a class="btn btn-primary" href="{{route('mangas.show',$manga->id)}}">Voir</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection