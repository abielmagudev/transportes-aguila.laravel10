@extends('aplicacion')
@section('contenido')
<h1>Editar Propietario</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('propietarios.update', $propietario) }}" method="post" autocomplete="off">
            @include('propietarios._form')
            @method('put')
            <br>
            <div class="text-end">
                <button class="btn btn-warning" type="submit">Actualizar propietario</button>
                <a href="{{ route('propietarios.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </form>
    </div>
</div>
<br>
<x-custom.modal-confirmar-eliminar name="propietario" :route="route('propietarios.destroy', $propietario)">
    <p class='text-center my-4'>¿Deseas continuar para eliminar propietario <b>{{ $propietario->nombre }}</b>?</p>
</x-custom.modal-confirmar-eliminar>
@endsection