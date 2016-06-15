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
        'equipe_id_casa', 'equipe_id_visitante', 'jogo_id', 'campo_id'
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

    public function equipeCasa()
    {
        return $this->hasOne(Equipe::class, 'id', 'equipe_id_casa');
    }

    public function equipeVisitante()
    {
        return $this->hasOne(Equipe::class, 'id', 'equipe_id_visitante');
    }

    public function jogo()
    {
        return $this->hasOne(Jogo::class);
    }

}
