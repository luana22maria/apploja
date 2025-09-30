<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elogio extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentario',
        'categoria',
    ];
}
