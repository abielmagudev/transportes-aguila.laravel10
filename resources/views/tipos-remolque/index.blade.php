@extends('aplicacion')
@section('contenido')
<h1>Tipos de remolque</h1>
<br>
<p class="text-end">
    <a href="{{ route('tipos_remolque.create') }}" class="btn btn-primary">Nuevo tipo de remolque</a>
</p>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tiposRemolque as $tipoRemolque)
                    <tr>
                        <td>{{ $tipoRemolque->nombre }}</td>
                        <td class="text-end">
                            <a href="{{ route('tipos_remolque.edit', $tipoRemolque) }}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
