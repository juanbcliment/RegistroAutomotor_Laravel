<?php

namespace App\Http\Controllers;

use App\Models\Titulares;
use Illuminate\Http\Request;

class TitularesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('titulares.titulares', ['titulares' => Titulares::orderBy("created_at", "desc")->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Titulares $titular)
    {
        return view('titulares.titulares-create', compact('titular'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'apellido' => 'required',
            'nombre' => 'required',
            'dni' => 'required',
            'domicilio' => 'required',

         ]);
         Titulares::create($request->all());

        return redirect()->route('titulares.index');
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
    public function edit($id)
    {
        $titular = Titulares::find($id);
        return view('titulares.titulares-edit', compact('titular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'apellido' => 'required',
           'nombre' => 'required',
           'dni' => 'required',
           'domicilio' => 'required',

        ]);
        $titular = Titulares::find($id);
        $titular->update([
            'apellido' => $request->apellido,
            'nombre' => $request->nombre,
            'dni' => $request->dni,
            'domicilio' => $request->domicilio,
        ]);
        return redirect()->route('titulares.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $titular = Titulares::find($id);
        $titular->delete();
        return back();
    }
}
