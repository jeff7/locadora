<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = ['placa', 'disponivel', 'km', 'modelo_id'];

     public function locacaos()
    {
        //UM modelo PERTENCE a UMA marca
        return $this->belongsToMany('App\Models\Locacao');
    }
}
