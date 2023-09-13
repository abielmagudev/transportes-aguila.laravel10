<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrigenDestinoSaveRequest;
use App\Models\OrigenDestino;
use Illuminate\Http\Request;

class OrigenDestinoController extends Controller
{
    public function index()
    {
        return view('origenes-destinos.index')->with('origenesDestinos', OrigenDestino::all());
    }

    public function create()
    {
        return view('origenes-destinos.create', [
            'origenDestino' => new OrigenDestino,
            'paises' => OrigenDestino::getPaisesPredeterminados(),
        ]);
    }

    public function store(OrigenDestinoSaveRequest $request)
    {
        if(! $origenDestino = OrigenDestino::create( $request->validated() ) )
            return back()->with('danger', 'Error al guardar origen | destino');

        return redirect()->route('origenes_destinos.index')->with('success', "Origen | destino <b>{$origenDestino->nombre}</b> guardado");
    }

    public function show(OrigenDestino $origenDestino)
    {
        return redirect()->route('origenes_destinos.index');
    }

    public function edit(OrigenDestino $origenDestino)
    {
        return view('origenes-destinos.edit', [
            'origenDestino' => $origenDestino,
            'paises' => OrigenDestino::getPaisesPredeterminados(),
        ]);
    }

    public function update(OrigenDestinoSaveRequest $request, OrigenDestino $origenDestino)
    {
        if(! $origenDestino = OrigenDestino::create( $request->validated() ) )
            return back()->with('danger', 'Error al actualizar origen | destino');

        return redirect()->route('origenes_destinos.edit', $origenDestino)->with('success', "Origen | destino <b>{$origenDestino->nombre}</b> actualizado");
    }

    public function destroy(OrigenDestino $origenDestino)
    {
        if(! $origenDestino->delete() )
            return back()->with('danger', 'Error al eliminar origen | destino');

        return redirect()->route('origenes_destinos.index')->with('success', "Origen | destino <b>{$origenDestino->nombre}</b> eliminado");
    }
}
