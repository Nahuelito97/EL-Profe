<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Provincies;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProvinciaController extends Controller
{
    public function index()
    {
        $countrys = Pais::all();
        $provinciass = Provincies::orderBy('id', 'ASC')->paginate(100);
        return view('admin.provincias.index',
                compact('countrys', 'provinciass',
            )
        );
    }


    public function create()
    {
        $countrys = Pais::all();
        return view('admin.provincias.create',
            compact('countrys')
    );
    }

    public function store(Request $request){

        $request->validate([ /* Agregamos reglas de validación para el formulario. */
            'name' => 'required|max:255',
            'pais_id' => 'required',
        ]);

       $provincias = Provincies::create($request->all());

        return redirect()->route('provincias.index', $provincias);
    }

    public function edit(Provincies $provincias)
    {
        return view('admin.provincias.edit', compact('provincias'));
        return redirect(route('provincias.index'));
    }


    public function update(Request $request, Provincies $provincias)
    {
        $provincias->update($request->all());
        Alert::success('Info', 'The student was successfully updated.');

        return redirect(route('provincias.index'));
    }


    public function destroy($id)
    {
        $provincias = Provincies::find($id);
        $provincias->delete();
        return redirect(route('provincias.index'))->with('delete', 'OK');
    }
}
