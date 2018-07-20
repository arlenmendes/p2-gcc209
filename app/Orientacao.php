<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientacao extends Model
{
    protected $fillable = [
        'ID', 'Aluno', 'Professor', 'Tipo', 'Tema', 'Inicio', 'Fim', 'Cancelado'
    ];

    protected $table = 'ORIENTACAO';

    public $timestamps = false;
}
