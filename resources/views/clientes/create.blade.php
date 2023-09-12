@extends('aplicacion')
@section('contenido')
<h1>Nuevo cliente</h1>
<hr>
<form action="{{ route('clientes.store') }}" method="post" autocomplete="off">
    @include('clientes._form')
    <br>
    <button class="btn btn-success" type="submit">Guardar cliente</button>
    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Cancelar</a>
</form>
@endsection
