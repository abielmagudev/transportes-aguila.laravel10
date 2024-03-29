<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropietarioSaveRequest;
use App\Models\Propietario;
use App\Models\TipoRemolque;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index()
    {
        return view('propietarios.index')->with('propietarios', Propietario::orderBy('nombre')->get());
    }

    public function create()
    {
        return view('propietarios.create', [
            'propietario' => new Propietario,
            'tipos_remolque' => TipoRemolque::all(),
        ]);
    }

    public function store(PropietarioSaveRequest $request)
    {
        if (! $propietario = Propietario::create($request->validated()) ) {
            return back()->with('danger', 'Error al guardar propietario');
        }

        return redirect()->route('propietarios.index')->with('success', "Propietario <b>{$propietario->nombre}</b> guardado");
    }

    public function show(Propietario $propietario)
    {
        return view('propietarios.show')->with('propietario', $propietario);
    }

    public function edit(Propietario $propietario)
    {
        return view('propietarios.edit', [
            'propietario' => $propietario,
            'tipos_remolque' => TipoRemolque::all(),
        ]);
    }

    public function update(PropietarioSaveRequest $request, Propietario $propietario)
    {
        if (! $propietario->fill($request->validated())->save()) {
            return back()->with('danger', 'Error al actualizar propietario');
        }

        return redirect()->route('propietarios.edit', $propietario)->with('success', "Propietario <b>{$propietario->nombre}</b> actualizado");
    }

    public function destroy(Propietario $propietario)
    {
        if (! $propietario->delete()) {
            return back()->with('danger', 'Error al eliminar propietario');
        }

        return redirect()->route('propietarios.index')->with('success', "Propietario <b>{$propietario->nombre}</b> eliminado");
    }
}
