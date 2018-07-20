<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $fillable = [
        'Codigo', 'Nome', 'Instituicao', 'Sigla', 'Forma'
    ];
    protected $table = 'CURSO';
}
