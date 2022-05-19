<?php

namespace App\Http\Controllers;

use App\Favorita;
use App\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class FavoritaController extends Controller
{
    /**

     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $favoritas = Auth::user()->favoritas;

        return view('peliculas.peliculaFavoritas', compact('favoritas'));
    }

    /**

     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
 .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $favorita = new Favorita();
        $favorita->user_id = Auth::id();
        $favorita->pelicula_id = $request->pelicula_id;
        $favorita->save();

        return redirect()->route('pelicula.index')->with(['Mensaje' => 'Agregada a favoritos']);
    }

    /**

     *
     * @param  \App\Favorita  $favorita
     * @return \Illuminate\Http\Response
     */
    public function show(Favorita $favorita)
    {
        //
    }

    /**

     *
     * @param  \App\Favorita  $favorita
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorita $favorita)
    {
        //
    }

    /**

     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favorita  $favorita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorita $favorita)
    {
        //
    }

    /**

     *
     * @param  \App\Favorita  $favorita
     * @return \Illuminate\Http\Response
     */
    public function destroy($pelicula_id)
    {
        //
        Favorita::where(['user_id' => Auth::id(), 'pelicula_id' => $pelicula_id])->delete();
        return redirect()->route('favorita.index')->with(['Mensaje' => 'Pelicula eliminada de favoritos']);
    }
}
