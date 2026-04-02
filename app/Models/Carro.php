<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'cor',
        'preco',
        'modelo',
        'ano',
        'teto_solar',
        'motor',
        'fabricacao',
    ];


}
