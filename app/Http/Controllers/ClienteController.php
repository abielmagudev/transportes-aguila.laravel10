<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteSaveRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes.index')->with('clientes', Cliente::all());
    }

    public function create()
    {
        return view('clientes.create', [
            'cliente' => new Cliente,
            'paises_predeterminados' => Cliente::getPaisesPredeterminados(),
            'tipos_moneda' => config('aplicacion.tipos_moneda'),
            'tipos_pago' => config('aplicacion.tipos_pago'),
        ]);
    }

    public function store(ClienteSaveRequest $request)
    {
        if(! $cliente = Cliente::create($request->validated()) )
            return back()->with('danger', 'Error al guardar cliente');

        return redirect()->route('clientes.index')->with('success', "Cliente {$cliente->nombre} guardado");
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show')->with('cliente', $cliente);
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', [
            'cliente' => $cliente,
            'paises_predeterminados' => Cliente::getPaisesPredeterminados(),
            'tipos_moneda' => config('aplicacion.tipos_moneda'),
            'tipos_pago' => config('aplicacion.tipos_pago'),
        ]);
    }

    public function update(ClienteSaveRequest $request, Cliente $cliente)
    {
        if(! $cliente->fill( $request->validated() )->save() )
            return back()->with('danger', 'Error al actualizar cliente');

        return redirect()->route('clientes.edit', $cliente)->with('success', "Cliente <b>{$cliente->nombre}</b> actualizado");
    }

    public function destroy(Cliente $cliente)
    {
        if(! $cliente->delete() )
            return back()->with('danger', 'Error al eliminar cliente');

        return redirect()->route('clientes.index')->with('success', "Cliente <b>{$cliente->nombre}</b> eliminado");
    }
}
