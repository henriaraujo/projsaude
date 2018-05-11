@extends('layouts.app')
<style>


</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div><strong>Página Cadastro Instituição</strong></div>
                    <div ><a style="color: black; float:right;margin-top:-20px;" href="{{ url('/home') }}"><strong>Página Inicial</strong></a></div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                
                    </div>
                @endif
                <div>
                {{ Form::open(array('url' =>'/cadastro_instituicao')) }}
                <table class=" table-striped table-bordered table-condensed" style="width:100%" cellpadding="6"> 
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Longitude :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('long_inst', '', array('placeholder'=>'', 'size'=>'36x5')) }}</div>   
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Latitude :</div></strong>
                            <div  style="display: inline" >{{ Form::text('lat_inst', '', array('placeholder'=>'', 'size'=>'38x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Setor Censitário:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('setcens_inst', '', array('placeholder'=>'', 'size'=>'31x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Área de Ponderação:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('areap_inst', '', array('placeholder'=>'', 'size'=>'27x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Cód do Distrito IBGE:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('coddist_inst', '', array('placeholder'=>'', 'size'=>'27x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Distrito Municipal:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('distrito_inst', '', array('placeholder'=>'', 'size'=>'30x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Cód da Subprefeitura:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('subpref_inst', '', array('placeholder'=>'', 'size'=>'26x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Subprefeitura :</div> </strong>
                            <strong><div  style="display: inline" >{{ Form::text('codsubpref_inst', '', array('placeholder'=>'', 'size'=>'33x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Região 5:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('regiao5_inst', '', array('placeholder'=>'', 'size'=>'38x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Região 8:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('regiao8_inst', '', array('placeholder'=>'', 'size'=>'38x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Estabelecimento Saúde :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('estabelecimento_sa_inst', '', array('placeholder'=>'', 'size'=>'23x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Endereço :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('endereco_inst', '', array('placeholder'=>'', 'size'=>'37x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Bairro :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('bairro_inst', '', array('placeholder'=>'', 'size'=>'40x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Telefone :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('telefone_inst', '', array('placeholder'=>'', 'size'=>'38x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">CEP:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('cep_inst', '', array('placeholder'=>'', 'size'=>'42x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Min. Saúde/CNES :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('cnes_inst', '', array('placeholder'=>'', 'size'=>'29x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Cód Dependência Administrativa:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('sa_depadm_inst', '', array('placeholder'=>'', 'size'=>'15x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Dependência Administrativa:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('depadm_inst', '', array('placeholder'=>'', 'size'=>'20x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Cód Tipo Estabelecimento:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('sa_tipo_inst', '', array('placeholder'=>'', 'size'=>'21x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Tipo Estabelecimento:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('tipo_inst', '', array('placeholder'=>'', 'size'=>'26x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Cód Classe Tipos Estabelecimentos Saúde :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('sa_classe_inst', '', array('placeholder'=>'', 'size'=>'5x5')) }}</div>
                        </td>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Classe Tipos Estabelecimentos Saúde :</div> </strong>
                            <div  style="display: inline" >{{ Form::text('classe_inst', '', array('placeholder'=>'', 'size'=>'10x5')) }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <strong><div style="display: inline" align="left">Leitos Hospitalares:</div> </strong>
                            <div  style="display: inline" >{{ Form::text('leitos_inst', '', array('placeholder'=>'', 'size'=>'28x5')) }}</div>
                        </td>
                    </tr>
                </table>
                <div align="center"><br>
                    {{Form::submit('Cadastrar',['class' =>'btn btn-primary'])}}
                    {{ Form::close() }}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
