@extends('aplicacion')
@section('contenido')
<h1>Nuevo tipo de remolque</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('tipos_remolque.store') }}" method="post">
            @include('tipos-remolque._form')
            <br>
            <div class="text-end">
                <button class="btn btn-success" type="submit">Guardar tipo de remolque</button>
                <a href="{{ route('tipos_remolque.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
