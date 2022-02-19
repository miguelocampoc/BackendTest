<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table="libros";

    public $fillable = [
        'id',
        'titulo',
        'autor',
        'edicion',
        'editorial',
        'isbn',
        'fe_pu',
        'created_at',
        'updated_at'
    ];
}
