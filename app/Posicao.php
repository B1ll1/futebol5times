<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posicao extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'escalacao_id',
        'jogador_id',
        'nome'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posicao';
}
