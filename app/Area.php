<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'AREA';
    protected $fillable = [
        'ID', 'Nome'
    ];
}
