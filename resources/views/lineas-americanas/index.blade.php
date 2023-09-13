@extends('aplicacion')
@section('contenido')
<h1>Líneas americanas</h1>
<br>
<p class="text-end">
    <a href="{{ route('lineas_americanas.create') }}" class="btn btn-primary">Nueva línea americana</a>
</p>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lineasAmericanas as $lineaAmericana)
                    <tr>
                        <td>
                            <div>{{ $lineaAmericana->nombre }}</div>
                        </td>
                        <td>
                            <div>{{ $lineaAmericana->notas }}</div>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('lineas_americanas.edit', $lineaAmericana) }}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
