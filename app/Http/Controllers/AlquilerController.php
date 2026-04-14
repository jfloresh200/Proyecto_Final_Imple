<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;
use App\Models\Cliente;
use App\Models\Coche;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultado = Alquiler::where('estados', 'activo')->get();
    return view('alquiler.index')->with('resultado', $resultado);
    }

    public function finalizados()
    {
        
    $resultado = Alquiler::where('estados', 'finalizado')->get();
    return view('alquiler.finalizados')->with('resultado', $resultado);
    }

    public function finalizar($id)
    {
    $alquiler = Alquiler::findOrFail($id);
    $alquiler->estados = 'finalizado';
    $alquiler->save();

    return redirect('/alquileres');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
         $coches = Coche::all();

        return view('alquiler.create')
        ->with('clientes', $clientes)
        ->with('coches', $coches);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alquiler = new Alquiler();

        $alquiler->Matricula = $request->get('Matricula');
        $alquiler->DNI = $request->get('DNI');
        $alquiler->Seguro = $request->get('Seguro');
        $alquiler->Precio = $request->get('Precio');
        $alquiler->DiasCon = $request->get('DiasCon');
        $alquiler->estados = 'activo';

        $alquiler->save();

        return redirect('/alquileres');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alquiler = Alquiler::find($id);
        return view('alquiler.delete')->with('alquilerE', $alquiler);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alquiler = Alquiler::find($id);
        return view('alquiler.edit')->with('alquilerE', $alquiler);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alquiler = Alquiler::find($id);

        $alquiler->Matricula = $request->get('Matricula');
        $alquiler->DNI = $request->get('DNI');
        $alquiler->Seguro = $request->get('Seguro');
        $alquiler->Precio = $request->get('Precio');
        $alquiler->DiasCon = $request->get('DiasCon');

        $alquiler->save();

        return redirect('/alquileres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alquiler = Alquiler::find($id);
        $alquiler->delete();

        return redirect('/alquileres');
    }
}