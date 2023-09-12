@extends('aplicacion')
@section('contenido')
<h1>Editar movimiento</h1>
<br>
<form action="{{ route('movimientos.update', $movimiento) }}" method="post">
    @include('movimientos._form')
    @method('put')
    <button class="btn btn-warning" type="submit">Actualizar movimiento</button>
    <a href="{{ route('movimientos.index') }}" class="btn btn-primary">Regresar</a>
</form>
<br>
<x-custom.modal-confirmar-eliminar :route="route('movimientos.destroy', $movimiento)" name="movimiento">
    <p class='text-center my-4'>Deseas eliminar movimiento <b>#{{ $movimiento->id }}: Remolque {{ $movimiento->numero_remolque }}?</b></p>
</x-custom.modal-confirmar-eliminar>
@endsection
