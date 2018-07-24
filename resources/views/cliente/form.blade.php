 
@extends('adminlte::page')
@section('content_header')
<a href="{{ url( '/cliente' )}}" class="btn btn-info">
    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
    Voltar
</a>
<h1>Clientes</h1>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method='post' action="{{ url('/cliente/'.$cliente->id.'/update') }}">

    <fieldset>
                    <!-- Nome -->
        <div class='form-group {{ $errors->any()?$errors->has('nome')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='nome'>Nome</label>
            <input id='nome' name='nome' type='text' value='{{ empty(old('nome')) ? $cliente->nome : old('nome') }}' class='form-control input-md' required>
        </div>
                    {{-- <!-- Telefone -->
        <div class='form-group {{ $errors->any()?$errors->has('telefone')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='telefone'>Telefone</label>
            <input id='telefone' name='telefone' type='text' value='{{ empty(old('telefone')) ? $cliente->telefone : old('telefone') }}' class='form-control input-md' required>
        </div>
                    <!-- Email -->
        <div class='form-group {{ $errors->any()?$errors->has('email')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='email'>Email</label>
            <input id='email' name='email' type='text' value='{{ empty(old('email')) ? $cliente->email : old('email') }}' class='form-control input-md' required>
        </div>
                    <!-- Senha -->
        <div class='form-group {{ $errors->any()?$errors->has('senha')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='senha'>Senha</label>
            <input id='senha' name='senha' type='text' value='{{ empty(old('senha')) ? $cliente->senha : old('senha') }}' class='form-control input-md' required>
        </div>
                    <!-- Idade -->
        <div class='form-group {{ $errors->any()?$errors->has('idade')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='idade'>Idade</label>
            <input id='idade' name='idade' type='text' value='{{ empty(old('idade')) ? $cliente->idade : old('idade') }}' class='form-control input-md' required>
        </div>
                    <!-- Nascimento -->
        <div class='form-group {{ $errors->any()?$errors->has('nascimento')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='nascimento'>Nascimento</label>
            <input id='nascimento' name='nascimento' type='text' value='{{ empty(old('nascimento')) ? $cliente->nascimento : old('nascimento') }}' class='form-control input-md' required>
        </div>
                    <!-- Genero -->
        <div class='form-group {{ $errors->any()?$errors->has('genero')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='genero'>Genero</label>
            <input id='genero' name='genero' type='text' value='{{ empty(old('genero')) ? $cliente->genero : old('genero') }}' class='form-control input-md' required>
        </div>
                    <!-- Cor favorita -->
        <div class='form-group {{ $errors->any()?$errors->has('cor_favorita')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='cor_favorita'>Cor favorita</label>
            <input id='cor_favorita' name='cor_favorita' type='text' value='{{ empty(old('cor_favorita')) ? $cliente->cor_favorita : old('cor_favorita') }}' class='form-control input-md' required>
        </div>
                    <!-- Habilidades -->
        <div class='form-group {{ $errors->any()?$errors->has('habilidades')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='habilidades'>Habilidades</label>
            <input id='habilidades' name='habilidades' type='text' value='{{ empty(old('habilidades')) ? $cliente->habilidades : old('habilidades') }}' class='form-control input-md' required>
        </div>
                    <br> --}}
        {{ csrf_field() }}
        <div class="clearfix"></div>
        <button type='submit' class='btn btn-lg btn-primary'>Salvar edição</button>
    </fieldset>
</form>
@stop
    