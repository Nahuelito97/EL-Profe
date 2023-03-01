<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Http\Requests\Especiality\StoreRequest;
use App\Http\Requests\Especiality\UpdateRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PaisController extends Controller

{
    public function index()
    {
        $countrys = Pais::orderBy('id', 'ASC')->paginate(10);
        return view('admin.pais.index', compact('countrys'));
    }

    public function create()
    {
        return view('admin.pais.create');
    }

    public function store(StoreRequest $request, Pais $country)
    {
        $country->my_store($request);
        Alert::success('Success','El País se creo correctamente.');

        return redirect()->back();
    }


    public function show(Pais $country)
    {
        return view('admin.pais.show', compact('country'));
    }

    public function edit($id)
    {
        $country = Pais::find($id);
        return view('admin.pais.edit', compact('country'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $country = Pais::find($id);
        $country->update($request->all());
        Alert::success('Info','El País se modifico correctamente.');
        return redirect(route('todos.index'));
    }


    public function destroy($id)
    {
        $country = Pais::find($id);
        $country->delete();
        return redirect(route('todos.index'))->with('delete', 'OK');
    }

}
