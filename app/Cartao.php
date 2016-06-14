<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sumula_id', 'jogador_id', 'instante', 'tipo'
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cartoes';

    public function jogador(){
        return $this->belongsTo('App\Jogador');
    }
}
