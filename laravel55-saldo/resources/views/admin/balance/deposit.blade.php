@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer Recarga</h1>

    <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Saldo</a></li>
        <li><a href="#">Depositar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Fazer Recarga</h3>
        <div class="box-body">
            <form method="POST" action="{{ route('deposit.store') }}">
                {!! csrf_field() !!} {{-- Cria um input com o token de segurança do laravel, pode se usar csrf_token() porem o mesmo necessita que o input seja criado manualmente --}}
                <div class="form-group">
                    <input type="text" placeholder="Valor Recarga" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Recarregar</button>
                </div>
            </form>
        </div>
    </div>
@stop