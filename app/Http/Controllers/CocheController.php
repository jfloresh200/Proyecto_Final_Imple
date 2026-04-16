<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class CocheController extends Controller
{
    public function index()
    {
        $resultado = Coche::all();
        return view('coches.index')->with('resultado', $resultado);
    }

    public function create()
    {
        return view('coches.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'Matricula' => 'required|unique:coches,Matricula',
        'Marca' => 'required|string',
        'Modelo' => 'required|string',
        'Grupo' => 'required|string',
        'NumeroPuertas' => 'required|numeric',
        'EdadMinima' => 'required|numeric',
        'CodOficina' => 'required|numeric'
    ], [
        'Matricula.unique' => 'Este coche ya está registrado'
    ]);

    $coches = new Coche();

    $coches->Matricula = $request->get('Matricula');
    $coches->Marca = $request->get('Marca');
    $coches->Modelo = $request->get('Modelo');
    $coches->Grupo = $request->get('Grupo');
    $coches->NumeroPuertas = $request->get('NumeroPuertas');
    $coches->EdadMinima = $request->get('EdadMinima');
    $coches->CodOficina = $request->get('CodOficina');

    $coches->save();

    return redirect('/coches')->with('success', 'Coche guardado correctamente');
    }

    public function show(string $id)
    {
        $coches = Coche::where('Matricula', $id)->first();
        return view('coches.delete')->with('cochesE', $coches);
    }

    public function edit(string $id)
    {
        $coches = Coche::where('Matricula', $id)->first();
        return view('coches.edit')->with('cochesE', $coches);
    }

    public function update(Request $request, string $id)
    {
       
    $request->validate([
        'Matricula' => 'required|unique:coches,Matricula,' . $id . ',Matricula',
        'Marca' => 'required|string',
        'Modelo' => 'required|string',
        'Grupo' => 'required|string',
        'NumeroPuertas' => 'required|numeric',
        'EdadMinima' => 'required|numeric',
        'CodOficina' => 'required|numeric'
    ], [
        'Matricula.unique' => 'Esta matrícula ya está registrada'
    ]);

    $coches = Coche::where('Matricula', $id)->first();

    $coches->Matricula = $request->get('Matricula');
    $coches->Marca = $request->get('Marca');
    $coches->Modelo = $request->get('Modelo');
    $coches->Grupo = $request->get('Grupo');
    $coches->NumeroPuertas = $request->get('NumeroPuertas');
    $coches->EdadMinima = $request->get('EdadMinima');
    $coches->CodOficina = $request->get('CodOficina');

    $coches->save();

    return redirect('/coches')->with('success', 'Coche actualizado correctamente');
    }

    public function destroy(string $id)
    {
        $eliminado = Coche::where('Matricula', $id)->first();
        $eliminado->delete();

        return redirect('/coches');
    }
}