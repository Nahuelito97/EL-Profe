<?php

namespace App\Http\Controllers;

use App\Materias;
use App\Profesorss;
use Illuminate\Http\Request;
use App\Http\Requests\Materias\StoreRequest;
use App\Http\Requests\Materias\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesorss::all();
        $materiass = Materias::orderBy('id', 'ASC')->paginate(100);
        return view('admin.materias.index',
             compact(
                'materiass', 
                'profesores'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesorss::all();
        return view('admin.materias.create', compact('profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Materias $materias)
    {
        $materias->my_store($request);
        Alert::success('Success','La Materia fue creada corretamente.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(Materias $materiass)
    {
        return view('admin.materias.show', compact('materiass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesores = Profesorss::all();
        $materias = Materias::find($id);
        return view('admin.materias.edit', compact('materias', 'profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $materias = Materias::find($id);
        $materias->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materias = Materias::find($id);
        $materias->delete();
        return redirect(route('materias.index'))->with('delete', 'OK');
    }
}
