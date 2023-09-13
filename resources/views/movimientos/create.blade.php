@extends('aplicacion')
@section('contenido')
<h1>Nuevo movimiento</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('movimientos.store') }}" method="post">
            @include('movimientos._form')
            <br>
            <div class="text-end">
                <button class="btn btn-success" type="submit">Guardar movimiento</button>
                <a href="{{ route('movimientos.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
