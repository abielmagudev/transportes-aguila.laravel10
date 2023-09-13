@extends('aplicacion')
@section('contenido')
<h1>Editar origen | destino</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('origenes_destinos.update', $origenDestino) }}" method="post" autocomplete="off">
            @include('origenes-destinos._form')
            @method('put')
            <br>
            <div class="text-end">
                <button class="btn btn-warning">Actualizar origen | destino</button>
                <a href="{{ route('origenes_destinos.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </form>
    </div>
</div>
<br>
<x-custom.modal-confirmar-eliminar name="origen | destino" :route="route('origenes_destinos.destroy', $origenDestino)">
    <p class='text-center my-4'>¿Deseas continuar para eliminar origen | destino <b>{{ $origenDestino->nombre }}</b>?</p>
</x-custom.modal-confirmar-eliminar>
@endsection
