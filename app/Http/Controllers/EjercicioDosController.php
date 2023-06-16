<?php

namespace App\Http\Controllers;

use App\Models\EjericicioUnoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Excel;

class EjercicioDosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ejercicio_dos');
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
        $validator = Validator::make($request->all(), [
            'archivo' => 'required|mimes:csv,xlsx,txt'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->hasFile('archivo')) {
            $path = $request->file('archivo')->getRealPath();
            $data = array_map('str_getcsv', file($path));
            print_r($data);
            $header = array_shift($data);
            dd($header);

            foreach ($data as $row) {
                $row = array_combine($header, $row);
                dd($row);
                // Map CSV field names to validation rule fields
                /*$validationData = [
                    'nombre' => $row['nombre'],
                    'correo' => $row['correo'],
                    'fecha_registro' => $row['fecha_registro']
                ];

                // Validar los datos antes de insertarlos en la base de datos
                $validator = Validator::make($validationData, [
                    'nombre' => 'required',
                    'correo' => 'required|email',
                    'fecha_registro' => 'required|date'
                ]);

                // Insertar los datos en la base de datos
                EjericicioUnoModel::create($validator);*/
            }
        }

        return redirect()->back()->with('success', 'Usuarios importados correctamente');
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

    public function importar(Request $request)
    {
        if($request->hasFile('archivo')){
            $path = $request->file('archivo')->getRealPath();
            $datos = Excel::load($path, function($reader){   
            })->get();

            if(!empty($datos) && datos->count()){
                $datos = $datos->toArray();
                for($i=0; i<count($datos); $i++){
                    $datosImportar[] = $datos[$i];
                }
            }

            EjericicioUnoModel::insert($datosImportar);
        }

        return back();
    }

}
