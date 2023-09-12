@extends('aplicacion')
@section('contenido')
<x-custom.header-left-right>
    <x-slot name="left">
        <h1>Nuevo cliente</h1>
    </x-slot>
</x-custom.header-left-right>
<form action="{{ route('clientes.store') }}" method="post" autocomplete="off">
    @include('clientes._form')
    <br>
    <div class="text-end">
        <button class="btn btn-success" type="submit">Guardar cliente</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-primary">Cancelar</a>
    </div>
</form>
@endsection
