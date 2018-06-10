<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isCliente()){
            $series = Serie::orderBy('nome')->get();

            return view('cliente.serie_listar', [
                'series' => $series
                ]);
        }elseif(Auth::user()->isAdmin()){
            $series = Serie::orderBy('nome')->get();

            return view('series.serie_index', [
                'series' => $series
                ]);
        }
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.serie_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $serie = new Serie;
        $serie = $serie->create($request->all());
       
        return redirect('series');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Serie $series)
    {
        return view('series.serie_edit', [
            'serie' => $series
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $series)
    {
        //dd($request->all());
        $series->update($request->all());
        return redirect('series/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $series)
    {
        $series->delete();
        return redirect('series');
    }
}
