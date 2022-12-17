<?php

namespace App\Http\Controllers;

use App\Students;
use App\Asistence;
use Illuminate\Http\Request;



class AsistenceController extends Controller
{
    public function index()
    {

        $studentss = Students::orderBy('id', 'ASC')->paginate(10);
        return view('admin.asistences.index', compact('studentss'));
    }

    public function edit($id)
    {
        $studentss = Students::find($id);
        $asistencias = Asistence::pluck('status','id');

        return view('admin.asistences.edit', [
            'studentss' => $studentss,
            'asistencias' => $asistencias,
        ]);
    }


    public function update(Request $request, Students $studentss)
    {
      $studentss->update($request->all());
      return redirect()->route('asistencias.index', $studentss);
    }
}
