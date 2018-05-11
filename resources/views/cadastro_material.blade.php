@extends('layouts.app')
@section('content')
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('#select1').change(function(){
                $('#warning1').hide();
                $('#warning2').hide();
                if ($(this).val() == "Medicamento") {
                    $('#warning1').show();
                }
                else if($(this).val() == "Material") 
                    $('#warning2').show();
                else{
                    $('#warning1').hide();
                    $('#warning2').hide();
                }
            });
        });
    </script>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <strong><div>Página Cadastro Material/Medicamento</div></strong>
                    <strong><div ><a style="color: black; float:right;margin-top:-20px;" href="{{ url('/home') }}">Página Inicial</a></div></strong>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <tr>                                         
                            <td>
                                <strong>Cadastrar:</strong> <select id="select1">
                                        <option value="0"></option>
                                        <option value="Medicamento">Material</option>
                                        <option value="Material">Medicamento</option>
                                        </select>
                            </td>
                        </tr>
                        <div id="warning1" style="display:none">
                            {{ Form::open(array('url1' => '/cadastro_material')) }}
                            <table class=" table-striped table-bordered table-condensed" style="width:100%" cellpadding="4">  
                                <tr>
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Nome:</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('nome_mat', '', array('placeholder'=>'', 'size'=>'37x5')) }}</div>   
                                    </td>
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Marca:</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('marca_mat', '', array('placeholder'=>'', 'size'=>'37x5')) }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- <td width="50%">
                                        <strong><div style="display: inline" align="left">Quantidade :</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('setcens_inst', '', array('placeholder'=>'', 'size'=>'32x5')) }}</div>
                                    </td> --}}
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Tamanho :</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('tamanho_mat', '', array('placeholder'=>'', 'size'=>'34x5')) }}</div>
                                    </td>
                                </tr>
                            </table>  
                            {{Form::hidden('tipo','Material') }}<br>
                            <div align="center">{{Form::submit('Cadastrar',['class' =>'btn btn-primary'])}}</div>
                            {{ Form::close() }}
                        </div>
            <!-- ____________________________________________________________________________________________________________________________________________ -->
                        <div id="warning2" style="display:none">
                            {{ Form::open(array('url3' => '/cadastro_material')) }}
                            <table class=" table-striped table-bordered table-condensed" style="width:100%" cellpadding="4">  
                                <tr>
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Nome:</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('nome_med', '', array('placeholder'=>'', 'size'=>'37x5')) }}</div>   
                                    </td>
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Nome Genérico:</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('nome_ge_med', '', array('placeholder'=>'', 'size'=>'29x5')) }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Concentração/Composição :</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('comp_med', '', array('placeholder'=>'', 'size'=>'18x5')) }}</div>
                                    </td>
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Forma Farmacêutica:</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('forma_med', '', array('placeholder'=>'', 'size'=>'25x5')) }}</div>
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td width="50%">
                                        <strong><div style="display: inline" align="left">Data de Validade:</div> </strong>
                                        <div  style="display: inline" >{{ Form::text('areap_inst', '', array('placeholder'=>'', 'size'=>'28x5')) }}</div>
                                    </td>
                                </tr> --}}
                            </table>  
                            {{Form::hidden('tipo','Medicamento') }}<br>
                            <div align="center">{{Form::submit('Cadastrar',['class' =>'btn btn-primary'])}}</div>
                            {{ Form::close() }}
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
