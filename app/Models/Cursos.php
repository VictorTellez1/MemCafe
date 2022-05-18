<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = [
        'titulo',
        'precio',
        'cupo',
        'imagen',
        'descripcion'
    ];
    public function editor(){
        return $this->belongsTo(User::class,'user_id');
    }
}
