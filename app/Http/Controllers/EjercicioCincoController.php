<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class EjercicioCincoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::latest()->get();
        return view('ejercicio_cinco', compact('images'));
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
        $request->validate([
            'image' => 'required|image|max:2048',
            'titulo' => 'required|string',
            'descripcion' => 'nullable|string',
        ]);

        $image = $request->file('image');
        $nombre_archivo = $image->getClientOriginalName();
        $path = $image->storeAs('images', $nombre_archivo, 'public');

        Image::create([
            'nombre_archivo' => $nombre_archivo,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('ejercicio_cinco');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'titulo' => 'required|string',
            'descripcion' => 'nullable|string',
        ]);

        $image = $request->file('image');
        $nombre_archivo = $image->getClientOriginalName();
        $path = $image->storeAs('images', $nombre_archivo, 'public');

        Image::create([
            'nombre_archivo' => $nombre_archivo,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('ejercicio_cinco');
    }
}
