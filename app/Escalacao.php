<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escalacao extends Model
{
    protected $table = 'escalacao';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sumula_id',
        'jogador_id',
        'equipe_id'
    ];

    public function jogador()
    {
        return $this->belongsTo('App\Jogador');
    }
}
