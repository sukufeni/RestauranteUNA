<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','descricao','preco'];
}
