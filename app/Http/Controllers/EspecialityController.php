<?php

namespace App\Http\Controllers;

use App\Especiality;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Requests\EspecialityResquest;

class EspecialityController extends Controller
{

    public function index()
    {
        $especiality = Especiality::orderBy('id', 'asc')->get();
        return view('admin.especialities.index', compact('especiality'));
    }

    public function create()
    {
        return view('admin.especialities.create');
    }

    public function store(Request $request)
    {
        $request->validate([                        /* Agregamos reglas de validación para el formulario. */
            'name' => 'required|max:255',
        ]);

        $especiality =  Especiality::create($request->all());

        Alert::success('Success','The especiality was created correctly.');

        return redirect()->route('especialities.index', $especiality);
    }


    public function show(Especiality $especiality)
    {
        return view('admin.especialities.show', compact('especiality'));
    }


    public function edit(Especiality $especiality)
    {
        return view('admin.especialities.edit', compact('especiality'));
        return redirect(route('admin.especialities.index'));
    }


    public function update(Request $request, Especiality $especiality)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $especiality->update($request->all());

        Alert::success('Info', 'The especialities was successfully updated.');

        return redirect()->route('especialities.index', $especiality);
    }

}
