@extends('aplicacion')
@section('contenido')
<x-custom.header-left-right>
    <x-slot name="left">
        <h1>Editar cliente</h1>
    </x-slot>
</x-custom.header-left-right>
<form action="{{ route('clientes.update', $cliente) }}" method="post" autocomplete="off">
    @include('clientes._form')
    @method('put')
    <br>
    <div class="text-end">
        <button class="btn btn-warning" type="submit">Actualizar cliente</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-primary">Regresar</a>
    </div>
</form>
<br>
<x-custom.modal-confirmar-eliminar name="cliente" :route="route('clientes.destroy', $cliente)">
    <p class='text-center my-4'>Deseas continuar para eliminar cliente <b>{{ $cliente->nombre }}</b>?</p>
</x-custom.modal-confirmar-eliminar>
@endsection
