<?php

namespace App;
use App\Cliente;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    //usado para criar em massa
    protected $fillable = [
        'titulo', 'telefone'
    ];

    //relacionameto 1 para 1
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
