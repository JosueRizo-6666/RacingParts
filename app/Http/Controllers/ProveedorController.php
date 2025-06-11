<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor.index', ['proveedores' => $proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nombre' => 'required|string|max:255',
            'num_rtn' => 'required|regex:/^\d{10}$/',
            'direccion' => 'required|string|min:5',
            'telefono' => 'required|regex:/^\+\d{1,3}[\s-]?\d{8}$/',
            'correo' => 'required|email',
            'rep_ventas' => 'required|string|regex:/^[A-Za-z\s\.\-]+$/',
        ]);

        // Create a new Proveedor instance and fill it with validated data
        $proveedor = new Proveedor($request->all());
        $proveedor->save();

        // Redirect with a success message
        return redirect()->route('proveedores.index')->with('success', 'Proveedor creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         // Busca el proveedor por su ID. Si no lo encuentra, lanzará una excepción 404.
        $proveedor = Proveedor::findOrFail($id);

        // Retorna la vista 'proveedor.show' y le pasa la variable 'proveedor'.
        return view('proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedor.edit', ['proveedor' => $proveedor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'nombre' => 'required|string|max:255',
            'num_rtn' => 'required|regex:/^\d{10}$/',
            'direccion' => 'required|string|min:5',
            'telefono' => 'required|regex:/^\+\d{1,3}[\s-]?\d{8}$/',
            'correo' => 'required|email',
            'rep_ventas' => 'required|string|regex:/^[A-Za-z\s\.\-]+$/',
        ]);

        // Find the Proveedor by ID and update it
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($request->all());

        // Redirect with a success message
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        // Redirect with a success message
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente.');
    }
}
