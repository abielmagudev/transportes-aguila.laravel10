@extends('aplicacion')
@section('contenido')
<h1>Editar movimiento</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('movimientos.update', $movimiento) }}" method="post">
            @include('movimientos._form')
            @method('put')
            <br>
            <div class="text-end">
                <button class="btn btn-warning" type="submit">Actualizar movimiento</button>
                <a href="{{ route('movimientos.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </form>
    </div>
</div>
<br>
<x-custom.modal-confirmar-eliminar :route="route('movimientos.destroy', $movimiento)" name="movimiento">
    <p class='text-center my-4'>Deseas eliminar movimiento <b>#{{ $movimiento->id }}: Remolque {{ $movimiento->numero_remolque }}?</b></p>
</x-custom.modal-confirmar-eliminar>
@endsection
