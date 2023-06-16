<?php

namespace App\Http\Controllers;

use App\Models\EjericicioUnoModel;
use Illuminate\Http\Request;    

class EjercicioUnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ejercicio_uno');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ejercicio_uno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = new EjericicioUnoModel();
        $datos->nombre = $request->input('nombre');
        $datos->correo = $request->input('correo');
        $datos->contrasena = bcrypt($request->input('contrasena'));
        $datos->fecha_registro = date('Y-m-d');
        $datos->save();
    
        return redirect()->route('ejercicio_uno');
    }

    /**
     * Display the specified resource.
     */
    public function show(EjericicioUnoModel $ejericicioUnoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EjericicioUnoModel $ejericicioUnoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EjericicioUnoModel $ejericicioUnoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EjericicioUnoModel $ejericicioUnoModel)
    {
        //
    }
}
