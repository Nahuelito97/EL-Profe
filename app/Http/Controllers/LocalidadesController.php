<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidad;
use App\Provincies;
use App\Http\Requests\Cities\UpdateRequest;
use App\Http\Requests\Cities\StoreRequest;
use RealRashid\SweetAlert\Facades\Alert;

class LocalidadesController extends Controller
{
    public function index()
    {
        $provincias = Provincies::all();
        $localidadess = Localidad::orderBy('id', 'ASC')->paginate(100);
        return view('admin.ciudades.index', compact('provincias', 'localidadess'));
    }

    public function create()
    {
        $provincias = Provincies::all();
        return view('admin.ciudades.create', compact('provincias'));
    }

    public function store(StoreRequest $request, Localidad $localidades)
    {
        $localidades->my_store($request);
        Alert::success('Success','The City was created correctly.');

        return redirect()->back();
    }

    public function show(Localidad $localidades)
    {
        return view('admin.ciudades.show', compact('localidades'));
    }

    public function edit($id)
    {
        $provincias = Provincies::all();
        $localidades = Localidad::find($id);
        return view('admin.ciudades.edit', compact('localidades', 'provincias'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $localidades = Localidad::find($id);
        $localidades->update($request->all());
        return redirect(route('cities.index')); //
    }

    public function destroy($id)
    {
        $localidades = Localidad::find($id);
        $localidades->delete();
        return redirect(route('cities.index'))->with('delete');
    }
}
