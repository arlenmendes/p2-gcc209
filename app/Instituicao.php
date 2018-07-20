<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = [
        'Sigla', 'Nome', 'Cidade', 'UF', 'Pais'
    ];
    protected $table = 'INSTITUICAO';

    public $timestamps = false;
}
