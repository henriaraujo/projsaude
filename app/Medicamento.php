<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'projsaude.medicamento';
    public $timestamps = false;


  protected $fillable = [
    'nome', 'nome_generico', 
    'concentracao_composicao', 'forma_farmaceutica',
  ];
}