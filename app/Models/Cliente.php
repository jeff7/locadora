<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function locacaos()
    {
        //UM modelo PERTENCE a UMA marca
        return $this->belongsToMany('App\Models\Locacao');
    }
}