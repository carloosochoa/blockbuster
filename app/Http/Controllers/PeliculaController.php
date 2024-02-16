<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use Illuminate\Pagination\Paginator;

class PeliculaController extends Controller
{
    
    public function index()
    {
        $peliculas = Pelicula::paginate(5);
        return view('peliculas.inicio',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        $pelicula->title = $request->get('titulo');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');
        $pelicula->poster = $request->get('poster');
        $pelicula->rented = $request->get('rented');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->save();
        $peliculas = Pelicula::paginate(5);
        return view('peliculas.inicio',compact('peliculas'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->title = $request->get('titulo');
        $pelicula->year = $request->get('anyo');
        $pelicula->poster = $request->get('poster');
        $pelicula->director = $request->get('director');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->save();
        $peliculas = Pelicula::paginate(5);
        return view('peliculas.inicio',compact('peliculas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }
    public function nuevo(){
        return redirect()->route('peliculas.store');
    }
}
