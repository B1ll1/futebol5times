<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'campo_id', 'hora_inicio', 'hora_fim', 'data'
    ];


    public function equipes(){
        return $this->belongsToMany('App\Equipe', 'equipe_jogos')->withPivot('jogo_id', 'equipe_id_casa', 'equipe_id_visitante')->withTimestamps();
    }

}
