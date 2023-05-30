@extends('aplicacion')
@section('contenido')
<h1>Movimientos</h1>
<p class="text-end">
    <a href="{{ route('movimientos.create') }}" class="btn btn-primary">Nuevo</a>
</p>
<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th></th>
                <th>Número</th>
                <th>Placas</th>
                <th>Propietario</th>
                <th>Tipo</th>
                <th class='text-nowrap'>Línea americana</th>
                <th>Origen</th>
                <th>Destino</th>
                <th class='text-nowrap'>Dias en patio</th>
                <th class='text-nowrap'>Cerrado</th>
                <th class='text-nowrap'>Cruce</th>
                <th class='text-nowrap'>Fecha y hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movimientos as $movimiento)
            <tr>
                <td class="text-end">
                    <a href="{{ route('movimientos.edit', $movimiento) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td class='text-nowrap'>{{ $movimiento->numero_remolque }}</td>
                <td class='text-nowrap'>{{ $movimiento->placas_remolque }}</td>
                <td class='text-nowrap'>{{ $movimiento->propietario_remolque }}</td>
                <td class='text-nowrap'>{{ $movimiento->tipoRemolque->nombre }}</td>
                <td class='text-nowrap'>{{ $movimiento->lineaAmericana->nombre }}</td>
                <td></td>
                <td></td>
                <td>{{ $movimiento->cantidad_dias_patio }}</td>
                <td class='text-capitalize'>{{ $movimiento->responde_es_cerrado_extranjero }}</td>
                <td class='text-capitalize'>{{ $movimiento->responde_es_cruce_directo }}</td>
                <td class='text-nowrap'>
                    {{ $movimiento->fecha }} {{ $movimiento->hora }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
