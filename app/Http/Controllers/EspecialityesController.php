<?php

namespace App\Http\Controllers;

use App\Especiality;
use App\Http\Requests\Especiality\StoreRequest;
use App\Http\Requests\Especiality\UpdateRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class EspecialityesController extends Controller
{
    public function index()
    {
        $especialitiesss = Especiality::orderBy('id', 'ASC')->paginate(100);
        return view('admin.especialities.index', compact('especialitiesss'));
    }

    public function create()
    {
        return view('admin.especialities.create');
    }

    public function store(StoreRequest $request, Especiality $especialities)
    {
        $especialities->my_store($request);
        Alert::success('Success','La especialidad fue creada correctamente.');

        return redirect(route('especialities.index'));
    }


    public function show(Especiality $especialities)
    {
        return view('admin.especialities.show', compact('especialities'));
    }

    public function edit($id)
    {
        $especialities = Especiality::find($id);
        return view('admin.especialities.edit', compact('especialities'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $especialities = Especiality::find($id);
        $especialities->update($request->all());
        Alert::success('Success','La especialidad fue actualizada correctamente.');

        return redirect(route('especialities.index'));
    }


    public function destroy($id)
    {
        $especialities = Especiality::find($id);
        $especialities->delete();
        return redirect(route('especialities.index'))->with('delete', 'OK');
    }
}
