<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('autos.autos', ['autos' => Autos::orderBy("created_at", "desc")->paginate(15)]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Autos $auto)
    {
        return view('autos.autos-create', compact('auto'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titular_id' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required',
            'tipo' => 'required',

         ]);
         Autos::create($request->all());

        return redirect()->route('autos.index');
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
        $auto = Autos::find($id);
        return view('autos.autos-edit', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titular_id' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required',
            'tipo' => 'required',

         ]);
         $titular = Autos::find($id);
         $titular->update([
             'titular_id' => $request->titular_id,
             'marca' => $request->marca,
             'modelo' => $request->modelo,
             'patente' => $request->patente,
             'tipo' => $request->tipo,
         ]);
         return redirect()->route('autos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $auto = autos::find($id);
        $auto->delete();
        return back();
    }
}
