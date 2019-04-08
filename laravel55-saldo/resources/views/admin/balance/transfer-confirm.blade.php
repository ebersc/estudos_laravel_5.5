@extends('adminlte::page')

@section('title', 'Confirmar Transferência de Saldo')

@section('content_header')
    <h1>Confirmar Transferência</h1>

    <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Saldo</a></li>
        <li><a href="#">Transferir</a></li>
        <li><a href="#">Confirmação</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Confirmar Transferência de Saldo</h3>
        <div class="box-body">

           @include('admin.includes.alerts')

            <p><strong>Recebedor: </strong>{{ $sender->name }}</p>
            <p><strong>Seu saldo atual: R$ </strong>{{ number_format($balance->amount, 2, '.', '') }}</p>

            <form method="POST" action="{{ route('transfer.store') }}">
                {!! csrf_field() !!} {{-- Cria um input com o token de segurança do laravel, pode se usar csrf_token() porem o mesmo necessita que o input seja criado manualmente --}}

                <input type="hidden" name="sender_id" value="{{ $sender->id }}">

                <div class="form-group">
                    <input type="text" placeholder="Valor:" class="form-control" name="value">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Transferir</button>
                </div>
            </form>
        </div>
    </div>
@stop
