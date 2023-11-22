<?php

namespace App\Http\Controllers;

use App\Models\Infracciones;
use Illuminate\Http\Request;

class InfraccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('infracciones.infracciones', ['infracciones' => Infracciones::orderBy("created_at", "desc")->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Infracciones $infraccion)
    {
        return view('infracciones.infracciones-create', compact('infraccion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'auto_id' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',

         ]);
         Infracciones::create($request->all());

        return redirect()->route('infracciones.index');
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
        $infraccion = Infracciones::find($id);
        return view('infracciones.infracciones-edit', compact('infraccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'auto_id' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',

         ]);
         $infraccion = infracciones::find($id);
         $infraccion->update([
             'auto_id' => $request->auto_id,
             'fecha' => $request->fecha,
             'descripcion' => $request->descripcion,
             'tipo' => $request->tipo,
         ]);
         return redirect()->route('infracciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $infraccion = Infracciones::find($id);
        $infraccion->delete();
        return back();
    }
}
