<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'dimensoes'
    ];
}
