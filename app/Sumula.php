<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumula extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'equipe_id_casa', 'equipe_id_visitante', 'jogo_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipe_jogos';

    public function gols(){
        return $this->hasMany('App\Gol');
    }

}
