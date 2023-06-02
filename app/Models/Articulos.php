<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="articulos";

    protected $fillable = [
        'titulo',   
        'ciudad',
        'pais',
        'autor',
        'imagen1',
        'imagen2', 
        'imagen3', 
        'imagen4', 
        'imagen5', 
        'imagen6', 
        'imagen7', 
        'imagen8', 
        'imagen9'
    ];
}
