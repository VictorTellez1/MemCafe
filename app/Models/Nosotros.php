<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    protected $fillable = [
        'titulo',
        'imagen',
        'descripcion',
    ];
}