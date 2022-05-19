<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PeliculaController extends Controller
{
    /**

     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        //
        $peliculas = Pelicula::all();
        $userID = Auth::id();
        $admin = false;

        if($userID == 1){
            $admin = true;
        }

        return view('peliculas.peliculaIndex', compact('peliculas', 'admin'));
    }

    /**

     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peliculas.peliculaForm');
    }

    /**

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        //$informacion_basica = $request->anio . ' - ' . $request->genero . ' - ' . $request->duracion;

        $pelicula->nombre_pelicula = $request->nombre_pelicula;
        $pelicula->imagen_url = $request->imagen_url;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->url_trailer = $request->url_trailer;
        $pelicula->anio = $request->anio;
        $pelicula->genero = $request->genero;
        $pelicula->duracion = $request->duracion;
        //$pelicula->informacion_basica = $informacion_basica;

        $pelicula->save();
        return redirect()->route('pelicula.index')->with(['Mensaje' => 'Pelicula añadida correctamente']);

    }

    /**

     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //

        /* $comentarios = Comentario::where('pelicula_id','=', $pelicula->id); */
        $comentarios = DB::table('comentarios')->where('pelicula_id', '=', $pelicula->id)->get();
        $userID = Auth::id();
        $admin = false;

        if($userID == 1){
            $admin = true;
        }

        return view('peliculas.peliculaShow', compact('pelicula', 'comentarios', 'admin'));
    }

    /**

     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        //
        return view('peliculas.peliculaForm', compact('pelicula'));
    }

    /**

     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula->nombre_pelicula = $request->nombre_pelicula;
        $pelicula->imagen_url = $request->imagen_url;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->url_trailer = $request->url_trailer;
        $pelicula->anio = $request->anio;
        $pelicula->genero = $request->genero;
        $pelicula->duracion = $request->duracion;
        //$pelicula->informacion_basica = $informacion_basica;

        $pelicula->save();
        return redirect()->route('pelicula.index')->with(['Mensaje' => 'Pelicula editada correctamente']);
    }

    /**

     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        //
        $pelicula->delete();
        return redirect()->route('pelicula.index')->with(['Mensaje' => 'Pelicula eliminada correctamente']);
    }
}
