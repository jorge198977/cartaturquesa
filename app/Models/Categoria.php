<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre'
   	];


   	public function preparados()
   	{
       return $this->hasMany('App\Models\Preparado');
   	}
}
