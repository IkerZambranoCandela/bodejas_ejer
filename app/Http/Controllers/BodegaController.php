<?php
// BodegaController
namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Vino;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodegas = Bodega::all();
        return view("bodegas.index", ["bodegas" => $bodegas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("bodegas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // dd($request);
        $validated = $request->validate([
            "nombre" => 'required|max:255',
            "direccion" => "required|max:255",
            "email" => "required|email|max:255",
            "telefono" => "required|numeric",
            "persona_contacto" => "required|max:255",
            "anio_fundacion" => "required|numeric",
            "descripcion" => "required",
            "restaurante" => "required|max:1",
            "hotel" => "required|max:1",
        ]);
        

        Bodega::create($validated);

        return redirect(route("bodegas.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bodega $bodega)
    {
        //
        $vinos = $bodega->vinos()->get();
        // dd($vinos);
        return view('bodegas.show', ["bodega" => $bodega, "vinos" => $vinos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bodega $bodega)
    {
        //
        $vinos = $bodega->vinos()->get();
        return view('bodegas.edit', ["bodega" => $bodega, "vinos" => $vinos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bodega $bodega)
    {
        //
        $validated = $request->validate([
            "nombre" => 'required|max:255',
            "direccion" => "required|max:255",
            "email" => "required|email|max:255",
            "telefono" => "required|numeric",
            "persona_contacto" => "required|max:255",
            "anio_fundacion" => "required|numeric",
            "descripcion" => "required",
            "restaurante" => "required|max:1",
            "hotel" => "required|max:1",
        ]);
        $bodega->update($validated);
        return redirect(route("bodegas.show", $bodega));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bodega $bodega)
    {
        //
        $bodega->delete();
        return redirect(route("bodegas.index"));

    }
}
