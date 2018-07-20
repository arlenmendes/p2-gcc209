<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesquisa extends Model
{
    protected $fillable = [
        'Professor', 'Area', 'Linha',
    ];

    protected $table = 'PESQUISA';

    public $timestamps = false;

    public function area() {
    }

}
