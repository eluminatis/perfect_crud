 
@extends('adminlte::page')
@section('content_header')
<a href="{{ url( '/cliente' )}}" class="btn btn-info">
    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
    Voltar
</a>
<h1>Clientes</h1>
@stop

@section('content')
<fieldset>
            <!-- nome -->
    <div class='form-group'>
        <label class='control-label' for='nome'>Nome</label>
        <output class='form-control input-md'>{{ $cliente->nome }}</output>
    </div>
            <!-- telefone -->
    <div class='form-group'>
        <label class='control-label' for='telefone'>Telefone</label>
        <output class='form-control input-md'>{{ $cliente->telefone }}</output>
    </div>
            <!-- email -->
    <div class='form-group'>
        <label class='control-label' for='email'>Email</label>
        <output class='form-control input-md'>{{ $cliente->email }}</output>
    </div>
            <!-- senha -->
    <div class='form-group'>
        <label class='control-label' for='senha'>Senha</label>
        <output class='form-control input-md'>{{ $cliente->senha }}</output>
    </div>
            <!-- idade -->
    <div class='form-group'>
        <label class='control-label' for='idade'>Idade</label>
        <output class='form-control input-md'>{{ $cliente->idade }}</output>
    </div>
            <!-- nascimento -->
    <div class='form-group'>
        <label class='control-label' for='nascimento'>Nascimento</label>
        <output class='form-control input-md'>{{ $cliente->nascimento }}</output>
    </div>
            <!-- genero -->
    <div class='form-group'>
        <label class='control-label' for='genero'>Genero</label>
        <output class='form-control input-md'>{{ $cliente->genero }}</output>
    </div>
            <!-- cor_favorita -->
    <div class='form-group'>
        <label class='control-label' for='cor_favorita'>Cor_favorita</label>
        <output class='form-control input-md'>{{ $cliente->cor_favorita }}</output>
    </div>
            <!-- habilidades -->
    <div class='form-group'>
        <label class='control-label' for='habilidades'>Habilidades</label>
        <output class='form-control input-md'>{{ $cliente->habilidades }}</output>
    </div>
</fieldset>
@stop
    