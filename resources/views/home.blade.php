@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>Página Inicial</strong> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div align="center">
                        <button class="btn btn-primary"><a style=" all: unset;" href="{{url('cadastro_instituicao')}}">Cadastro Instituição</a></button>
                        <button class="btn btn-primary"><a style=" all: unset;" href="{{url('cadastro_material')}}">Cadastro Material/Medicamento</a></button>
                        <button class="btn btn-primary"><a style=" all: unset;" href="{{url('lista_instituicao')}}">Lista Instituição</a></button></button>
                        <button class="btn btn-primary"><a style=" all: unset;" href="{{url('lista_material')}}">Lista Material/Medicamento</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
