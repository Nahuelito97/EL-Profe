<?php

namespace App\Http\Controllers;

use App\Especiality;
use Illuminate\Http\Request;

use App\Http\Requests\EspecialityResquest;

class EspecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especiality = Especiality::orderBy('id', 'asc')->get();
        return view('admin.especiality.index', compact('especiality'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.especiality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EspecialityResquest $request)
    {
        Especiality::crete($request->all());
        return redirect()->route('especialityy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Especiality  $especiality
     * @return \Illuminate\Http\Response
     */
    public function show(Especiality $especiality)
    {
        return view('admin.especiality.show', compact('especiality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especiality  $especiality
     * @return \Illuminate\Http\Response
     */
    public function edit(Especiality $especiality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especiality  $especiality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especiality $especiality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especiality  $especiality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especiality $especiality)
    {
        //
    }
}
