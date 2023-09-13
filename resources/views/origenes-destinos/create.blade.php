@extends('aplicacion')
@section('contenido')
<h1>Nuevo origen | destino</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('origenes_destinos.store') }}" method="post" autocomplete="off">
            @include('origenes-destinos._form')
            <br>
            <div class="text-end">
                <button class="btn btn-success" type="submit">Guardar origen | destino</button>
                <a href="{{ route('origenes_destinos.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
