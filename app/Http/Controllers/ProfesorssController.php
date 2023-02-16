<?php

namespace App\Http\Controllers;

use App\Profesorss;
use App\Direction;
use App\Pais;
use App\Localidad;
use App\Provincies;
use App\Especiality;
use Illuminate\Http\Request;
use Session;
use RealRashid\SweetAlert\Facades\Alert;


class ProfesorssController extends Controller
{
    public function index()
    {
        $country = Pais::all();
        $province = Provincies::all();
        $localities = Localidad::all();
        $directions = Direction::all();
        $especialitis = Especiality::all();

        $profesorss = Profesorss::orderBy('id', 'ASC')->paginate(5);
        return view(
            'admin.profesorss.index',
            compact(
                'profesorss',
                'country',
                'province',
                'localities',
                'directions'
            )
        );
    }


    public function create()
    {
        $country = Pais::all();
        $province = Provincies::all();
        $localities = Localidad::all();
        $directions = Direction::all();
        $especialitis = Especiality::all();

        return view('admin.profesorss.create',
            compact('country', 'province', 'localities', 'directions', 'especialitis')
    );
    }

    public function store(Request $request){

        $request->validate([                        /* Agregamos reglas de validación para el formulario. */
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'dni' => 'required|unique:students|min:8|max:8',
            'date_of_birth' => 'required|date|before_or_equal:today',
            'phone' => 'bail|required|unique:students|min:13|max:13',
            'email' => 'required||unique:students,email',
            'date_of_address' => 'required|date',
            'pais_id' => 'required',
            'provincies_id' => 'required',
            'localities_id' => 'required',
            'directions_id' => 'required',
            'especialitis_id' => 'required'
        ]);



       $profesorss = Profesorss::create($request->all());

        return redirect()->route('profesorss.index', $profesorss);
    }


    public function show(Profesorss $profesorss)
    {
        return view('admin.profesorss.show', compact('profesorss'));
    }

    public function edit(Profesorss $profesorss)
    {
        dd($profesorss);
        return view('admin.profesorss.edit', compact('profesorss'));
        return redirect(route('admin.profesorss.index'));
    }


    public function update(Request $request, Profesorss $profesorss)
    {
        $profesorss->update($request->all());

        Alert::success('Info', 'The profesor was successfully updated.');
        return redirect()->route('profesorss.index', $profesorss);
    }

    public function destroy($id)
    {
        $profesorss = Profesorss::find($id);
        $profesorss->delete();
        return redirect(route('profesorss.index'))->with('delete', 'OK');
    }
}
