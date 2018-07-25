@extends('adminlte::page')
@section('content_header')
<h1>Clientes</h1>
@stop

@section('content')
@include('messages.msgs')
<a href="{{ url('/cliente/create') }}" class="btn btn-lg btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Novo cadastro</a>
@if($clientes->all())
<br /><br />
<div class='box'>
    <div class='box-body' style="overflow: auto;">
        <table id="mytable" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th style="width:125px">Visualizar</th>
                    <th style="width:125px">Editar</th>
                    <th style="width:125px">Apagar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td><a href="{{ url('/cliente/'.$cliente->id.'/show') }}" class="btn btn-lg btn-block btn-success">Visualizar</a></td>
                    <td><a href="{{ url('/cliente/'.$cliente->id.'/edit') }}" class="btn btn-lg btn-block btn-primary">Editar</a></td>
                    <td><a href="{{ url('/cliente/'.$cliente->id.'/destroy') }}" class="btn btn-lg btn-block btn-danger">Apagar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<br /><br />
<p>Não há clientes cadastrados</p>
@endif
@stop

@section('js')
<script>
    $(document).ready(function () {
        $('#mytable').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - desculpe",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro encontrado",
                "infoFiltered": "(filtrado de _MAX_ registros)",
                "loadingRecords": "Carregando...",
                "processing": "Processando...",
                "search": "Procurar:",
                "paginate": {
                    "first": "Primeiro",
                    "last": "Último",
                    "next": "Próximo",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>
@stop