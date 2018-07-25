 
    @extends('adminlte::page')
    @section('content_header')
<h1>Cliente</h1>
@stop

@section('content')
@include('messages.msgs')

<form method='post' action="@if(isset($cliente)){{ url('/cliente/'.$cliente->id.'/update') }}@else{{ url('/cliente/store') }}@endif">
    <fieldset>
        
        <!-- Nome -->
        <div class='form-group {{ $errors->any()?$errors->has('nome')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='nome'>Nome</label>
            <input id='nome' name='nome' type='text' placeholder='string' @if(old('nome') || isset($cliente)) value='@if(old('nome')){{ old('nome') }}@else{{$cliente->nome}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Telefone -->
        <div class='form-group {{ $errors->any()?$errors->has('telefone')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='telefone'>Telefone</label>
            <input id='telefone' name='telefone' type='text' placeholder='string' @if(old('telefone') || isset($cliente)) value='@if(old('telefone')){{ old('telefone') }}@else{{$cliente->telefone}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Email -->
        <div class='form-group {{ $errors->any()?$errors->has('email')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='email'>Email</label>
            <input id='email' name='email' type='text' placeholder='string' @if(old('email') || isset($cliente)) value='@if(old('email')){{ old('email') }}@else{{$cliente->email}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Senha -->
        <div class='form-group {{ $errors->any()?$errors->has('senha')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='senha'>Senha</label>
            <input id='senha' name='senha' type='text' placeholder='string' @if(old('senha') || isset($cliente)) value='@if(old('senha')){{ old('senha') }}@else{{$cliente->senha}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Idade -->
        <div class='form-group {{ $errors->any()?$errors->has('idade')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='idade'>Idade</label>
            <input id='idade' name='idade' type='text' placeholder='Int' @if(old('idade') || isset($cliente)) value='@if(old('idade')){{ old('idade') }}@else{{$cliente->idade}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Nascimento -->
        <div class='form-group {{ $errors->any()?$errors->has('nascimento')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='nascimento'>Nascimento</label>
            <input id='nascimento' name='nascimento' type='text' placeholder='data em formato americano 1988-01-14' @if(old('nascimento') || isset($cliente)) value='@if(old('nascimento')){{ old('nascimento') }}@else{{$cliente->nascimento}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Genero -->
        <div class='form-group {{ $errors->any()?$errors->has('genero')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='genero'>Genero</label>
            <input id='genero' name='genero' type='text' placeholder='string' @if(old('genero') || isset($cliente)) value='@if(old('genero')){{ old('genero') }}@else{{$cliente->genero}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Cor favorita -->
        <div class='form-group {{ $errors->any()?$errors->has('cor_favorita')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='cor_favorita'>Cor favorita</label>
            <input id='cor_favorita' name='cor_favorita' type='text' placeholder='string' @if(old('cor_favorita') || isset($cliente)) value='@if(old('cor_favorita')){{ old('cor_favorita') }}@else{{$cliente->cor_favorita}}@endif'@endif class='form-control input-md'>
        </div>
        
        <!-- Habilidades -->
        <div class='form-group {{ $errors->any()?$errors->has('habilidades')?'has-error':'has-success':'' }}'>
            <label class='control-label' for='habilidades'>Habilidades</label>
            <input id='habilidades' name='habilidades' type='text' placeholder='string' @if(old('habilidades') || isset($cliente)) value='@if(old('habilidades')){{ old('habilidades') }}@else{{$cliente->habilidades}}@endif'@endif class='form-control input-md'>
        </div>
                    <br>
        {{ csrf_field() }}
        <div class="clearfix"></div>
        <a href="{{ url( '/cliente' )}}" class="btn btn-lg btn-info">
            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
            Voltar
        </a>
        <button type='submit' class='btn btn-lg btn-primary'>
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Salvar
            @if(isset($cliente)) Alterações @endif
        </button>
        @if(isset($cliente))
            <a href="{{ url('/cliente/'.$cliente->id.'/destroy')}}" class="btn btn-lg btn-danger">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Deletar
            </a>
        @endif            
    </fieldset>
</form>
@stop
    