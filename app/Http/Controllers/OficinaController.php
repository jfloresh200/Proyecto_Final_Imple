<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $resultado = Oficina::where('activooficina', 1)->get();
        return view('oficina.index')->with('resultado', $resultado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('oficina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // VALIDACIÓN
    $request->validate([
        'Ciudad' => 'required|string',
        'Direccion' => 'required|string|unique:oficinas,Direccion',
        'CodigoPostal' => 'required|numeric',
        'Telefono' => 'required|numeric'
    ], [
        'Direccion.unique' => 'Esta oficina ya está registrada'
    ]);

    // GUARDAR
    $oficina = new Oficina();
    $oficina->Ciudad = $request->get('Ciudad');
    $oficina->Direccion = $request->get('Direccion');
    $oficina->CodigoPostal = $request->get('CodigoPostal');
    $oficina->Telefono = $request->get('Telefono');
    $oficina->activooficina = 1;

    $oficina->save();

     return redirect('/oficinas')->with('success', 'Oficina guardada correctamente');
      }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $oficina = Oficina::find($id);
        return view('oficina.delete')->with('oficinaE', $oficina);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //return redirect('/oficinas.edit');
        $oficina = Oficina::find($id);
        return view('oficina.edit')->with('oficinaE', $oficina);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
  $request->validate([
    'Ciudad' => 'required|string',
    'Direccion' => 'required|string|unique:oficinas,Direccion,' . $id,
    'CodigoPostal' => 'required|numeric',
    'Telefono' => 'required|numeric'
], [
    'Direccion.unique' => 'Esta oficina ya está registrada'
]);

    $oficina = Oficina::find($id);
    $oficina->Ciudad = $request->get('Ciudad');
    $oficina->Direccion = $request->get('Direccion');
    $oficina->CodigoPostal = $request->get('CodigoPostal');
    $oficina->Telefono = $request->get('Telefono');
    $oficina->activooficina = 1;
    $oficina->save();

    return redirect('/oficinas')->with('success', 'Oficina actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado = Oficina::find($id);
        $eliminado->delete();

        return redirect('/oficinas');
    }

    /**
     * Desactivar la oficina especificada.
     */
    public function desactivar(string $id)
    {
        //
        $oficina = Oficina::find($id);
        $oficina->activooficina = 0;
        $oficina->save();

        return redirect('/oficinas');
    }

    /**
     * Activar la oficina especificada.
     */
    public function activar(string $id)
    {
        //
        $oficina = Oficina::find($id);
        $oficina->activooficina = 1;
        $oficina->save();

        return redirect('/oficinas');
    }
}