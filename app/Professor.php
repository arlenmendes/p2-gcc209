<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'ID', 'Nome', 'Email', 'Pagina', 'Instituicao', 'Lattes'
    ];

    protected $table = 'PROFESSOR';

    public $timestamps = false;

    public function pesquisas() {
        return $this->hasMany('App\Pesquisa');
    }

}
