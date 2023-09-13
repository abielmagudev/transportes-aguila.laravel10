@extends('aplicacion')
@section('contenido')
<h1>Origenes y destinos</h1>
<br>
<p class="text-end">
    <a href="{{ route('origenes_destinos.create') }}" class="btn btn-primary">Nuevo origen | destino</a>
</p>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    @foreach($origenesDestinos as $origenDestino)
                    <tr>
                        <td>{{ $origenDestino->nombre }}</td>
                        <td class="text-end">
                            <a href="{{ route('origenes_destinos.edit', $origenDestino) }}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<x-paginacion :collection="$origenesDestinos" />
@endsection
