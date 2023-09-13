@extends('aplicacion')
@section('contenido')
<h1>Clientes</h1>
<br>
<p class="text-end">
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo cliente</a>
</p>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
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
                    <th class="text-nowrap">Cuenta bancaria</th>
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
                    <td class="text-nowrap">{{ $cliente->nombre_pais }}</td>
                    <td>{{ $cliente->cuenta_banco }}</td>
                    <td>{{ $cliente->moneda }}</td>
                    <td>{{ $cliente->regimen_fiscal }}</td>
                    <td>{{ $cliente->retencion ? 'si' : 'no' }}</td>
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
    </div>
</div>
<br>
<x-paginacion :collection="$clientes" />
@endsection
