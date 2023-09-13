<?php

namespace App\Http\Controllers;

use App\Http\Requests\RutaSaveRequest;
use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index()
    {
        return view('rutas.index')->with('rutas', Ruta::all());
    }

    public function create()
    {
        return view('rutas.create')->with('ruta', new Ruta);
    }

    public function store(RutaSaveRequest $request)
    {
        if(! $ruta = Ruta::create( $request->validated() ) )
            return back()->with('danger', 'Error al guardar ruta');

        return redirect()->route('rutas.index')->with('success', "Ruta <b>{$ruta->nombre}</b> guardado");
    }

    public function show(Ruta $ruta)
    {
        return redirect()->route('rutas.index');
    }

    public function edit(Ruta $ruta)
    {
        return view('rutas.edit')->with('ruta', $ruta);
    }

    public function update(RutaSaveRequest $request, Ruta $ruta)
    {
        if(! $ruta->fill( $request->validated() )->save() )
            return back()->with('danger', 'Error al actualizar ruta');

        return redirect()->route('rutas.edit', $ruta)->with('success', "Ruta <b>{$ruta->nombre}</b> actualizado");
    }

    public function destroy(Ruta $ruta)
    {
        if(! $ruta->delete() )
            return back()->with('danger', 'Error al eliminar ruta');

        return redirect()->route('rutas.index')->with('success', "Ruta <b>{$ruta->nombre}</b> eliminado");
    }
}
