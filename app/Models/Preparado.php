<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparado extends Model
{
    protected $table = 'preparados';
    protected $fillable = [
        'PREPARADOS_NOMBRE', 'PREPARADOS_PRECIO', 'categoria_id'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria', 'categoria_id');
    }
}
