<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $table = 'projsaude.instituicao';
    public $timestamps = false;


  protected $fillable = [
    'long', 'lat', 'setcens',
    'areap', 'coddist',
    'distrito', 'codsubpref', 'subpref',
    'regiao5', 'regiao8', 'estabelecimento_sa',
    'endereco', 'bairro', 'telefone',
    'cep', 'cnes', 'sa_depadm',
    'depadm', 'sa_tipo', 'tipo',
    'sa_classe', 'classe', 'leitos',
  ];
}