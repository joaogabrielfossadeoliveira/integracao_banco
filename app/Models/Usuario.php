<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\password;

class Usuario extends Model
{
    use HasFactory;

    // CRIAR O EMAIL E A SENHA
    protected $fillable = [
    'nome',
    'email',
    'password'
    
    ];
}
