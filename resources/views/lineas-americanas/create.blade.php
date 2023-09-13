@extends('aplicacion')
@section('contenido')
<h1>Nueva línea americana</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('lineas_americanas.store') }}" method="post">
            @include('lineas-americanas._form')
            <br>
            <div class="text-end">
                <button class="btn btn-success" type="submit">Guardar línea americana</button>
                <a href="{{ route('lineas_americanas.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
