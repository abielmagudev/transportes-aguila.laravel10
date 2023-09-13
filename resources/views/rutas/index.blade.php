@extends('aplicacion')
@section('contenido')
<h1>Rutas</h1>
<br>
<p class="text-end">
    <a href="{{ route('rutas.create') }}" class="btn btn-primary">Nueva ruta</a>
</p>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Kilómetros</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rutas as $ruta)
                    <tr>
                        <td>{{ $ruta->nombre }}</td>
                        <td>{{ $ruta->kilometros }}</td>
                        <td class="text-end">
                            <a href="{{ route('rutas.edit', $ruta) }}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
