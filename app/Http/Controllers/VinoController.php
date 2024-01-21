<?php
// VinoController
namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Bodega $bodega)
    {
        //
        return view("vinos.create", ["bodega" => $bodega]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Bodega $bodega)
    {
        //
        $validated = $request->validate([
            "nombre" => 'required|max:255',
            "descripcion" => "required",
            "anio" => "required|numeric",
            "alcohol" => "required|numeric",
            "tipo_vino" => "required"
        ]);
        $vino = new Vino($validated);
        $bodega->vinos()->save($vino);
        return redirect(route("bodegas.show", ['bodega' => $bodega]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bodega $bodega, Vino $vino)
    {
        return view('vinos.show', ['vino' => $vino, 'bodega' => $bodega]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bodega $bodega, Vino $vino)
    {
        return view('vinos.edit', ['vino' => $vino, 'bodega' => $bodega]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bodega $bodega, Vino $vino)
    {
        $validated = $request->validate([
            "nombre" => 'required|max:255',
            "descripcion" => "required",
            "anio" => "required|numeric",
            "alcohol" => "required|numeric",
            "tipo_vino" => "required"
        ]);

        $vino->update($validated);

        // Puedes redirigir a la vista de detalles del vino o a donde prefieras
        return redirect(route("bodegas.show", ['bodega' => $bodega]));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bodega $bodega, Vino $vino)
    {
        //
        $vino->delete();
        return redirect(route("bodegas.show", ['bodega' => $bodega]));
    }
}
