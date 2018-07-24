 
@extends('adminlte::page')
@section('title', 'Inserir Cliente')
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
<form method='post' action="{{ url('/cliente/store') }}">
    <fieldset>
                        <!-- Nome -->
            <div class='form-group {{ $errors->any()?$errors->has('nome')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='nome'>Nome</label>
                <input id='nome' name='nome' type='text' value="{{ old('nome') }}" placeholder='Nome' class='form-control input-md' required>
            </div>
                        <!-- Telefone -->
            <div class='form-group {{ $errors->any()?$errors->has('telefone')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='telefone'>Telefone</label>
                <input id='telefone' name='telefone' type='text' value="{{ old('telefone') }}" placeholder='Telefone' class='form-control input-md' required>
            </div>
                        <!-- Email -->
            <div class='form-group {{ $errors->any()?$errors->has('email')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='email'>Email</label>
                <input id='email' name='email' type='text' value="{{ old('email') }}" placeholder='Email' class='form-control input-md' required>
            </div>
                        <!-- Senha -->
            <div class='form-group {{ $errors->any()?$errors->has('senha')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='senha'>Senha</label>
                <input id='senha' name='senha' type='text' value="{{ old('senha') }}" placeholder='Senha' class='form-control input-md' required>
            </div>
                        <!-- Idade -->
            <div class='form-group {{ $errors->any()?$errors->has('idade')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='idade'>Idade</label>
                <input id='idade' name='idade' type='text' value="{{ old('idade') }}" placeholder='Idade' class='form-control input-md' required>
            </div>
                        <!-- Nascimento -->
            <div class='form-group {{ $errors->any()?$errors->has('nascimento')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='nascimento'>Nascimento</label>
                <input id='nascimento' name='nascimento' type='text' value="{{ old('nascimento') }}" placeholder='Nascimento' class='form-control input-md' required>
            </div>
                        <!-- Genero -->
            <div class='form-group {{ $errors->any()?$errors->has('genero')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='genero'>Genero</label>
                <input id='genero' name='genero' type='text' value="{{ old('genero') }}" placeholder='Genero' class='form-control input-md' required>
            </div>
                        <!-- Cor favorita -->
            <div class='form-group {{ $errors->any()?$errors->has('cor_favorita')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='cor_favorita'>Cor favorita</label>
                <input id='cor_favorita' name='cor_favorita' type='text' value="{{ old('cor_favorita') }}" placeholder='Cor favorita' class='form-control input-md' required>
            </div>
                        <!-- Habilidades -->
            <div class='form-group {{ $errors->any()?$errors->has('habilidades')?'has-error':'has-success':'' }}'>
                <label class='control-label' for='habilidades'>Habilidades</label>
                <input id='habilidades' name='habilidades' type='text' value="{{ old('habilidades') }}" placeholder='Habilidades' class='form-control input-md' required>
            </div>
                    <br>
        {{ csrf_field() }}
        <div class="clearfix"></div>
        <button type='submit' class='btn btn-lg btn-primary'>Cadastrar</button>
    </fieldset>
</form>
@stop
    