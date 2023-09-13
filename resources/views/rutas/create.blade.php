@extends('aplicacion')
@section('contenido')
<h1>Nueva ruta</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('rutas.store') }}" method="post">
            @include('rutas._form')
            <br>
            <div class="text-end">
                <button class="btn btn-success" type="submit">Guardar ruta</button>
                <a href="{{ route('rutas.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
