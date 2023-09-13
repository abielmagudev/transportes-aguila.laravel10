@extends('aplicacion')
@section('contenido')
<h1>Nuevo Propietario</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('propietarios.store') }}" method="post" autocomplete="off">
            @include('propietarios._form')
            <br>
            <div class="text-end">
                <button class="btn btn-success" type="submit">Guardar propietario</button>
                <a href="{{ route('propietarios.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
