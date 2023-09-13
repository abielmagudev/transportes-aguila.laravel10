@extends('aplicacion')
@section('contenido')
<h1>Editar línea americana</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('lineas_americanas.update', $lineaAmericana) }}" method="post">
            @include('lineas-americanas._form')
            @method('put')
            <br>
            <div class="text-end">
                <button class="btn btn-warning" type="submit">Actualizar línea americana</button>
                <a href="{{ route('lineas_americanas.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </form>
    </div>
</div>
<br>
<x-custom.modal-confirmar-eliminar :route="route('lineas_americanas.destroy', $lineaAmericana)" name="línea americana">
    <p class='text-center my-4'>¿Deseas continuar para eliminar la línea americana <b>{{ $lineaAmericana->nombre }}</b>?</p>
</x-custom.modal-confirmar-eliminar>
@endsection
