<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Provincies;
use Illuminate\Http\Request;
use App\Http\Requests\Provincia\UpdateRequest;
use App\Http\Requests\Provincia\StoreRequest;
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

    public function store(StoreRequest $request, Provincies $provincias)
    {
        $provincias->my_store($request);
        Alert::success('Success','The Province was created correctly.');

        return redirect()->back();
    }

    public function edit($id)
    {
        $countrys = Pais::all();
        $provincias = Provincies::find($id);
        return view('admin.provincias.edit', compact('provincias', 'countrys'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $provincias = Provincies::find($id);
        $provincias->update($request->all());
        return redirect(route('provincias.index')); //
    }

    public function destroy($id)
    {
        $provincias = Provincies::find($id);
        $provincias->delete();
        return redirect(route('provincias.index'))->with('delete', 'OK');
    }
}
