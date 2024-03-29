<?php

namespace App\Http\Controllers;

use App\Http\Requests\LineaAmericanaSaveRequest;
use App\Models\LineaAmericana;
use Illuminate\Http\Request;

class LineaAmericanaController extends Controller
{
    public function index()
    {
        return view('lineas-americanas.index')->with('lineasAmericanas', LineaAmericana::orderBy('nombre')->get());
    }

    public function create()
    {
        return view('lineas-americanas.create')->with('lineaAmericana', new LineaAmericana());
    }

    public function store(LineaAmericanaSaveRequest $request)
    {
        if(! $lineaAmericana = LineaAmericana::create($request->validated()) )
            return back()->with('danger', 'Error al guardar línea americana');

        return redirect()->route('lineas_americanas.index')->with('success', "Línea americana <b>{$lineaAmericana->nombre}</b> guardado");
    }

    public function show(LineaAmericana $lineaAmericana)
    {
        return view('lineas-americanas.show')->with('lineaAmericana', $lineaAmericana);
    }

    public function edit(LineaAmericana $lineaAmericana)
    {
        return view('lineas-americanas.edit')->with('lineaAmericana', $lineaAmericana);
    }

    public function update(LineaAmericanaSaveRequest $request, LineaAmericana $lineaAmericana)
    {
        if(! $lineaAmericana->fill($request->validated())->save() )
            return back()->with('danger', 'Error al actualizar línea americana');

        return redirect()->route('lineas_americanas.edit', $lineaAmericana)->with('success', "Línea americana <b>{$lineaAmericana->nombre}</b> actualizado");
    }

    public function destroy(LineaAmericana $lineaAmericana)
    {
        if(! $lineaAmericana->delete() )
            return back()->with('danger', 'Error al eliminar línea americana');

        return redirect()->route('lineas_americanas.index')->with('success', "Línea americana <b>{$lineaAmericana->nombre}</b> eliminada");
    }
}
