<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table ='prestamos';

    public $fillable = [
        'id',
        'user_id',
        'libro_id',
        'expiracion',
        'fi',
        'fa',
        'created_at',
        'updated_at'
    ];
}
