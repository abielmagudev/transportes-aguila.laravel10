@extends('aplicacion')
@section('contenido')
<h1>Nuevo cliente</h1>
<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('clientes.store') }}" method="post" autocomplete="off">
            @include('clientes._form')
            <br>
            <div class="text-end">
                <button class="btn btn-success" type="submit">Guardar cliente</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
