@extends('adminlte::page')

@section('title', 'Transferir Saldo')

@section('content_header')
    <h1>Fazer Transferência</h1>

    <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Saldo</a></li>
        <li><a href="#">Transferir</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Transferir Saldo (Informe o recebedor)</h3>
        <div class="box-body">

           @include('admin.includes.alerts')

            <form method="POST" action="{{ route('confirm.transfer') }}">
                {!! csrf_field() !!} {{-- Cria um input com o token de segurança do laravel, pode se usar csrf_token() porem o mesmo necessita que o input seja criado manualmente --}}
                <div class="form-group">
                    <input type="text" placeholder="Informação de que vai receber o saque (Nome ou E-mail)" class="form-control" name="sender">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Próxima Etapa</button>
                </div>
            </form>
        </div>
    </div>
@stop
