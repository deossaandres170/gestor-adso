<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Muestra el listado de todos los proyectos (Diapositivas 29-31)
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Muestra el formulario para registrar un nuevo proyecto (Diapositiva 32)
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Valida los datos y guarda un nuevo proyecto en MariaDB (Diapositivas 33-34)
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Proyecto::create($request->all());

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto creado exitosamente.');
    }

    /**
     * Muestra el formulario para editar un proyecto existente (Diapositiva 35)
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Actualiza la información de un proyecto en MariaDB (Diapositiva 36)
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto actualizado exitosamente.');
    }

    /**
     * Elimina un proyecto de la base de datos (Diapositiva 37)
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto eliminado exitosamente.');
    }
}