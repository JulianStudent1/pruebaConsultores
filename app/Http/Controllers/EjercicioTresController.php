<?php

namespace App\Http\Controllers;

use App\Models\EjericicioUnoModel;
use Illuminate\Http\Request;

class EjercicioTresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = EjericicioUnoModel::all();
        return view('ejercicio_tres')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EjercicioTresModel $ejercicioTresModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EjercicioTresModel $ejercicioTresModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EjercicioTresModel $ejercicioTresModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EjercicioTresModel $ejercicioTresModel)
    {
        //
    }
}
