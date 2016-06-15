<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substituicao extends Model
{
    protected $table = 'substituicao';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sumula_id',
        'jogador_id_sai',
        'jogador_id_entra',
        'instante'
    ];
}
