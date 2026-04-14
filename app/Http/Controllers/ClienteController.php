<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes = Cliente::where('activocliente', 1)->get();
        return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente = new Cliente();
        $cliente->DNI = $request->DNI;
        $cliente->Nombre = $request->Nombre;
        $cliente->activocliente = 1;
        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente = Cliente::where('DNI',$id)->first();
        return view('cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Cliente::where('DNI',$id)->update([
        'DNI' => $request->DNI,
        'Nombre' => $request->Nombre]);
         $cliente->activocliente = 1;

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Cliente::where('DNI',$id)->delete();

        return redirect('/clientes');
    }

    /**
     * Desactivar el cliente especificado.
     */
    public function desactivar(string $id)
    {
        //
        Cliente::where('DNI',$id)->update(['activocliente' => 0]);

        return redirect('/clientes');
    }

    /**
     * Activar el cliente especificado.
     */
    public function activar(string $id)
    {
        //
        Cliente::where('DNI',$id)->update(['activocliente' => 1]);

        return redirect('/clientes');
    }
}