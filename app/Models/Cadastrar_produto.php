<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastrar_produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_produto',
        'quantidade',
        'cor',
        'image',
        'descricao',
        'valor',
    ];
      
}