@extends('aplicacion')
@section('contenido')
<h1>Editar ruta</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('rutas.update', $ruta) }}" method="post">
            @include('rutas._form')
            @method('put')
            <br>
            <div class="text-end">
                <button class="btn btn-warning" type="submit">Actualizar ruta</button>
                <a href="{{ route('rutas.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </form>
    </div>
</div>
<br>
<x-custom.modal-confirmar-eliminar name="ruta" :route="route('rutas.destroy', $ruta)">
    <p class='text-center my-4'>¿Deseas continuar para eliminar ruta <b>{{ $ruta->nombre }}</b>?</p>
</x-custom.modal-confirmar-eliminar>
@endsection
