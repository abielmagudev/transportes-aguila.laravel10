<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoRemolqueSaveRequest;
use App\Models\TipoRemolque;
use Illuminate\Http\Request;

class TipoRemolqueController extends Controller
{
    public function index()
    {
        return view('tipos-remolque/index')->with('tiposRemolque', TipoRemolque::all());
    }

    public function create()
    {
        return view('tipos-remolque/create')->with('tipoRemolque', new TipoRemolque);
    }

    public function store(TipoRemolqueSaveRequest $request)
    {
        if(! $tipoRemolque = TipoRemolque::create($request->validated() ))
            return back()->with('danger', 'Error al guardar tipo de remolque');

        return redirect()->route('tipos_remolque.index')->with('success', "Tipo de remolque <b>{$tipoRemolque->nombre}</b> guardado");
    }

    public function show(TipoRemolque $tipoRemolque)
    {
        return view('tipos-remolque/show')->with('tipoRemolque', $tipoRemolque);
    }

    public function edit(TipoRemolque $tipoRemolque)
    {
        return view('tipos-remolque/edit')->with('tipoRemolque', $tipoRemolque);
    }

    public function update(TipoRemolqueSaveRequest $request, TipoRemolque $tipoRemolque)
    {
        if(! $tipoRemolque->fill($request->validated())->save() )
            return back()->with('danger', 'Error al actualizar tipo de remolque');

        return redirect()->route('tipos_remolque.edit', $tipoRemolque)->with('success', "Tipo de remolque <b>{$tipoRemolque->nombre}</b> actualizado");
    }

    public function destroy(TipoRemolque $tipoRemolque)
    {
        if(! $tipoRemolque->delete() )
            return back()->with('danger', 'Error al eliminar tipo de remolque');

        return redirect()->route('tipos_remolque.index')->with('success', "Tipo de remolque <b>{$tipoRemolque->nombre}</b> eliminado");
    }
}
