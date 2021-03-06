<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = Manga::all();
        return view('index',compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function show(manga $manga)
    {
        $dessinateur = $manga->dessinateur;
        $scenariste = $manga->scenariste;
        $genre = $manga->genre;
        $path = 'images/' .$manga->couverture;
        return view('manga', compact('manga','dessinateur','scenariste','genre','path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\manga  $mangas
     * @return \Illuminate\Http\Response
     */
    public function edit(manga $mangas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\manga  $mangas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, manga $mangas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\manga  $mangas
     * @return \Illuminate\Http\Response
     */
    public function destroy(manga $manga)
    {
        $manga->delete();
        return back()->with('info','le manga a bien été supprimé de la base de données');
    }
}
