<?php

namespace App\Http\Controllers;

use App\Profesorss;
use Illuminate\Http\Request;
use Session;

class ProfesorssController extends Controller
{
    public function index()
    {
        $profesorss = Profesorss::orderBy('id', 'ASC')->paginate(5);
        return view('admin.profesorss.index', compact('profesorss'));

    }


    public function create()
    {
        return view('admin.profesorss.create');
    }

    public function store(ProfesorssRequest $request)
    {
        //dd($request);
        Profesorss::create($request->all());

        return redirect()->route('profesorss.index');

    }


    public function show(Profesorss $profesorss)
    {
        return view('admin.profesorss.show', compact('profesorss'));
    }

    public function edit(Profesorss $profesorss)
    {
        return view('admin.profesorss.edit', compact('profesorss'));
    }


    public function update(Request $request, Profesorss $profesorss)
    {
      $profesorss->update($request->all());
      return redirect()->route('profesorss.edit', $profesorss)->with('info', 'El profesor se actualizó con éxito.');
    }

    public function destroy($id)
    {
        $profesorss = Profesorss::find($id);
        if (!$profesorss) {
            Session::flash("error","The Profesor doesn't exist");
            return redirect()->back();
        }
        $profesorss->delete();
        Session::flash('success', 'Profesor deleted successfully');
        return redirect(route('Profesorss.index'));
        /*$studentss->update([
            'borrado' => 1,
        ]);
        return redirect(route('studentss.index'));*/
    }
}
