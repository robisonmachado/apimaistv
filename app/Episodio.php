<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    protected $fillable = [
        'numero',
        'nome', 
        'temporada_id',
        'url_arquivo',
        'url_capa',
        'descricao',
        'ativo'
    ];


}
