@extends('aplicacion')
@section('contenido')
<x-custom.header-left-right>
    <x-slot name="left">
        <h1>Clientes</h1>
    </x-slot>
    <x-slot name="right">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo cliente</a>
    </x-slot>
</x-custom.header-left-right>

<div class="table-responsive">
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Dirección</th>
            <th class="text-nowrap">No. exterior</th>
            <th class="text-nowrap">No. interior</th>
            <th>Colonia</th>
            <th class="text-nowrap">Código postal</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>País</th>
            <th class="text-nowrap">Cuenta de banco</th>
            <th>Moneda</th>
            <th class="text-nowrap">Régimen fiscal</th>
            <th class="text-nowrap">Retención del 4%</th>
            <th class="text-nowrap">Tipo de pago</th>
            <th>Tasa(IVA)</th>
            <th class="text-nowrap">Cuenta contable</th>
            <th></th>
        </thead>
        @foreach($clientes as $cliente)
        <tr>
            <td class="text-nowrap">{{ $cliente->nombre }}</td>
            <td class="text-nowrap">{{ $cliente->rfc }}</td>
            <td class="text-nowrap">{{ $cliente->direccion }}</td>
            <td>{{ $cliente->numero_exterior }}</td>
            <td>{{ $cliente->numero_interior }}</td>
            <td class="text-nowrap">{{ $cliente->colonia }}</td>
            <td>{{ $cliente->codigo_postal }}</td>
            <td class="text-nowrap">{{ $cliente->ciudad }}</td>
            <td class="text-nowrap">{{ $cliente->estado }}</td>
            <td>{{ $cliente->pais }}</td>
            <td>{{ $cliente->cuenta_banco }}</td>
            <td>{{ $cliente->moneda }}</td>
            <td>{{ $cliente->regimen_fiscal }}</td>
            <td>{{ $cliente->retencion_cuatro_porciento ? 'Si' : 'No' }}</td>
            <td>{{ $cliente->tipo_pago }}</td>
            <td>{{ $cliente->tasa_iva }}%</td>
            <td>{{ $cliente->cuenta_contable }}</td>
            <td class="text-end">
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
