<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sumula_id', 'jogador_id', 'instante', 'equipe_id'
    ];

    public function sumula(){
        return $this->belongsTo('App\Sumula');
    }

    public function jogador(){
        return $this->belongsTo('App\Jogador');
    }
}
