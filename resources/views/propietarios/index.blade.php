@extends('aplicacion')
@section('contenido')
<h1>Propietarios</h1>
<br>
<p class="text-end">
    <a href="{{ route('propietarios.create') }}" class="btn btn-primary">Nuevo propietario</a>
</p>
<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipos de remolque</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($propietarios as $propietario)
            <tr>
                <td>{{ $propietario->nombre }}</td>
                <td>
                    <span class="badge bg-light text-dark me-2">{{ $propietario->tipos_remolque_count }}</span>
                    <span>{{ $propietario->tiposRemolque()->pluck('nombre')->implode(', ') }}</span>
                </td>
                <td class="text-end">
                    <a href="{{ route('propietarios.edit', $propietario) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
