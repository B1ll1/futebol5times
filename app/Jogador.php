<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'equipe_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jogadores';

    public function equipe(){
        return $this->belongsTo('App\Equipe');
    }

    public function gols(){
        return $this->hasMany('App\Gol');
    }

    public function cartoes(){
        return $this->hasMany('App\Cartao');
    }
}
