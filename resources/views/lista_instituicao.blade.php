@extends('layouts.app')
@section('content')
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });   
    </script>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong><div>Página Lista Instituição</div></strong>
                    <strong><div ><a style="color: black; float:right;margin-top:-20px;" href="{{ url('/home') }}">Página Inicial</a></div></strong>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div align="right">
                        <strong>FILTRO</strong> <input type="search" id="myInput" placeholder="Busca..." data-table="order-table">
                    </div>
                    <table class=" table-striped table-bordered table-condensed" style="width:100%" cellpadding="6"> 
                        <thead>    
                            <tr>
                                <th>ID</th>
                                <th>CNES</th>
                                <th>Estabelecimento de Saúde</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($lista_instituicao as $instituicao)
                                <tr>
                                    <td>{{$instituicao->id}}</td>
                                    <td>{{$instituicao->cnes}}</td>
                                    <td>{{$instituicao->estabelecimento_sa}}</td>
                                    <td><button class="btn btn-primary"><a style=" all: unset;" href="{{url('info_instituicao/?id='.$instituicao->id)}}">Acessar</a></button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
