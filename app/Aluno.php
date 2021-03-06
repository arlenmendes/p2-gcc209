<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'Matricula', 'Nome', 'Cidade', 'UF', 'CRA', 'Curso'
    ];

    protected $table = 'ALUNO';

    public $timestamps = false;
}
