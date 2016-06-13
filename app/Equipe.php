<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'photo'
    ];

    public function jogadores(){
        return $this->hasMany('App\Jogador');
    }

    public function jogo(){
        return $this->belongsToMany('App\Jogo','equipe_jogos')->withPivot('jogo_id', 'equipe_id_visitante', 'equipe_id_casa')->withTimestamps();
    }
}
