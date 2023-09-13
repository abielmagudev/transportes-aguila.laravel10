@extends('aplicacion')
@section('contenido')
<h1>Editar tipo de remolque</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('tipos_remolque.update', $tipoRemolque) }}" method="post">
            @include('tipos-remolque._form')
            @method('put')
            <br>
            <div class="text-end">
                <button class="btn btn-warning" type="submit">Actualizar tipo de remolque</button>
                <a href="{{ route('tipos_remolque.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </form>
    </div>
</div>
<br>
<x-custom.modal-confirmar-eliminar :route="route('tipos_remolque.destroy', $tipoRemolque)" name="tipo de remolque">
    <p class='text-center my-4'>Deseas continuar para eliminar el tipo de remolque <b>{{ $tipoRemolque->nombre }}</b>?</p>
</x-custom.modal-confirmar-eliminar>
@endsection
