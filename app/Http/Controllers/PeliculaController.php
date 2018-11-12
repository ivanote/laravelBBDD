<?php

namespace App\Http\Controllers;

use App\Pelicula;
use App\Phone;
use Illuminate\Http\Request;
use App\User;
use App;



class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = App\User::with('phone')->get()->toJson(JSON_PRETTY_PRINT);
      
        dd($user);
        //return response()->json(['status'=>'ok','data'=>App\User::all()], 200);

        $telefono = App\User::find(1)->phone->first()->caracteristicas;
        dd($telefono);

            

        //$usuario=App\Pelicula::find(1)->user;
        //return $usuario;s

      // $pelicula = App\User::find(1)->peliculas;
       // return $pelicula;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        App\Pelicula::create(['numero'=> 5,'destino'=>'lili','origen'=>'lulu']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $peli=Phone::create($request->all());
        return $peli;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peli=Pelicula::find($id);
        if (!$peli)
		{
			// Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
			// En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
			return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un fabricante con ese código.'])],404);
		}
        return $peli;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peli=Pelicula::find($id);
        
        
      
        $peli->destino = 'New Flight Name';
        $peli->save();

        return $peli;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $peli=Pelicula::find($id);
        
        
      
        $peli->destino = 'New Flight Name';
        $peli->save();

        return $peli;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
