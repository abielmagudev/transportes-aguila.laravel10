<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovimientoSaveRequest;
use App\Models\CercaDecaGps;
use App\Models\Ciclo;
use App\Models\LineaAmericana;
use App\Models\Movimiento;
use App\Models\TipoRemolque;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function index()
    {
        return view('movimientos/index')->with(
            'movimientos', 
            Movimiento::with([
                'tipoRemolque', 
                'LineaAmericana', 
                'cercaGpsOrigen', 
                'cercaGpsDestino'
            ])->orderByDesc('id')->paginate(25)
        );
    }

    public function create()
    {
        return view('movimientos/create', [
            'movimiento' => new Movimiento,
            'tiposRemolque' => TipoRemolque::all(),
            'lineasAmericanas' => LineaAmericana::all(),
            'cercasDecaGps' => [], // CercaDecaGps::all(),
        ]);
    }

    public function store(MovimientoSaveRequest $request)
    {
        if(! $movimiento = Movimiento::create($request->validated()) )
            return back()->with('danger', 'Error al guardar movimiento');

        Ciclo::guardarMovimiento($movimiento);

        return redirect()->route('movimientos.index')->with('success', "Movimiento #{$movimiento->id} del remolque <b>{$movimiento->numero_remolque}</b> guardado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    public function edit(Movimiento $movimiento)
    {
        return view('movimientos/edit', [
            'movimiento' => $movimiento,
            'tiposRemolque' => TipoRemolque::all(),
            'lineasAmericanas' => LineaAmericana::all(),
            'cercasDecaGps' => CercaDecaGps::all(),
        ]);
    }

    public function update(MovimientoSaveRequest $request, Movimiento $movimiento)
    {
        if(! $movimiento->fill($request->validated())->save() )
            return back()->with('danger', 'Error al actualizar movimiento');

        Ciclo::actualizarMovimiento($movimiento);

        return redirect()->route('movimientos.edit', $movimiento)->with('success', "Movimiento #{$movimiento->id} del remolque <b>{$movimiento->numero_remolque}</b> actualizado");
    }

    public function destroy(Movimiento $movimiento)
    {
        if(! $movimiento->delete() )
            return back()->with('danger', 'Error al eliminar movimiento');

        return redirect()->route('movimientos.index')->with('success', "Movimiento #{$movimiento->id} del remolque <b>{$movimiento->numero_remolque}</b> eliminado");
    }
}
