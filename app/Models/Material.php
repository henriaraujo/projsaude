<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'projsaude.material';
    public $timestamps = false;


  protected $fillable = [
    'nome', 'marca', 'tamanho',
  ];
}