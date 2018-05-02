<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Filme;
use App\Genero;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isCliente()){
            //$ramdomFilmes = Filme::orderByRaw('RAND()')->distinct('id')->take(5)->get();
            $ramdomFilmes = Filme::getRamdomFilmes(14);
            //dd($ramdomFilmes);
            return view('cliente.cliente_index',[
                'ramdomFilmes' => $ramdomFilmes
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function escolherGeneroFilme(User $user)
    {
        if($user->ativo){
            //verifica se usuário é cliente
            if($user->user_type_id==1){
                $generos = Genero::orderBy('nome')->get();

                
                return view('cliente.escoher_genero_de_filme', [
                    'generos' => $generos
                ]);
            }

        } 

    }


    public function filmes(User $user, Genero $genero)
    {
        //dd($genero->filmes);

        if($user->ativo){
            //verifica se usuário é cliente
            if($user->user_type_id==1){
                $filmes = $genero->filmes;

                
                return view('cliente.filmes_do_genero_escolhido', [
                    'genero' => $genero,
                    'filmes' => $filmes
                ]);
            }

        } 



    }


}
