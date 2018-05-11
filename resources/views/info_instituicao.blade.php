@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div><strong>Página Informação Instituição</strong></div>
                    <div ><a style="color: black; float:right;margin-top:-20px;" href="{{ url('/home') }}"><strong>Página Inicial</strong></a></div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class=" table-striped table-bordered table-condensed" style="width:100%" cellpadding="6"> 
                        <tr>
                           <td width="50%">
                            <div>
                              <strong>ID:</strong> {{$instituicao->id}}
                            </div>
                          </td>
                           <td width="50%">
                            <div>
                              <strong>Longitude:</strong> {{$instituicao->long}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Latitude:</strong> {{$instituicao->lat}} 
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Setor Censitário:</strong> {{$instituicao->setcens}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                           <td>
                            <div >
                              <strong>Área de Ponderação:</strong> {{$instituicao->areap}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Cód do Distrito IBGE:</strong> {{$instituicao->coddist}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Distrito Municipal:</strong> {{$instituicao->distrito}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Cód da Subprefeitura:</strong> {{$instituicao->codsubpref}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Subprefeitura:</strong> {{$instituicao->subpref}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Região 5:</strong> {{$instituicao->regiao5}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Região 8:</strong> {{$instituicao->regiao8}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Estabelecimento Saúde:</strong> {{$instituicao->estabelecimento_sa}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Endereço:</strong> {{$instituicao->endereco}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Bairro:</strong> {{$instituicao->bairro}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Telefone:</strong> {{$instituicao->telefone}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>CEP:</strong> {{$instituicao->cep}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Min. Saúde/CNES:</strong> {{$instituicao->cnes}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Cód Dependência Administrativa:</strong> {{$instituicao->sa_depadm}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Dependência Administrativa:</strong> {{$instituicao->depadm}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Cód Tipo Estabelecimento:</strong> {{$instituicao->sa_tipo}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Tipo Estabelecimento:</strong> {{$instituicao->tipo}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Cód Classe Tipos Estabelecimentos Saúde:</strong> {{$instituicao->sa_classe}}
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div>
                              <strong>Classe Tipos Estabelecimentos Saúde:</strong> {{$instituicao->classe}}
                            </div>
                          </td>
                          <td>
                            <div>
                              <strong>Leitos Hospitalares:</strong> {{$instituicao->leitos}}
                            </div>
                          </td>
                        </tr>
                      </table>
                      <div align="center">
                          <p>
                            <button class="btn btn-primary"><a style=" all: unset;" href="{{url('cadastro_instituicao')}}">Adicionar Material/Medicamento</a></button> 
                            <button class="btn btn-primary"><a style=" all: unset;" href="{{url('cadastro_instituicao')}}">Estoque Material/Medicamento</a></button>
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
