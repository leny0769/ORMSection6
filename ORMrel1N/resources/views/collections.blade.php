@extends('layout.layout')

@section('titrePage')
    Liste des Collections 
@endsection

@section('titreItem')
    <h1>Toutes les collections :</h1>
@endsection


@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Pack et collections mangas :</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Prix</th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($collections as $collection)
                        <tr>
                            <td> {{ $collection->id }} </td>
                            <td><strong>{{ $collection->titre }}</strong></td>
                            <td> {{ $collection->prix }} </td>
                            <td> <a class="btn btn-primary" href="{{route('collections.show',$collection->id)}}">Voir</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection