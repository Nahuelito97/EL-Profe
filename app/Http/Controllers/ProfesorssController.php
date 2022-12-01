<?php

namespace App\Http\Controllers;

use App\Profesorss;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
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
      return redirect()->route('profesorss.index');
    }

}
