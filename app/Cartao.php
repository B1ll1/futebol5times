<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{

    protected $table = 'cartoes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sumula_id',
        'jogador_id',
        'instante',
        'tipo'
    ];

    protected $dates = [
        'instante'
    ];

    public function jogador()
    {
        return $this->hasOne('App\Jogador');
    }
}
