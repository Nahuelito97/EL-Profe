<?php

namespace App\Http\Controllers;

use App\Students;
use App\Asistence;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



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
        $asistencias = Asistence::pluck('status', 'id');

        return view('admin.asistences.index', [
            'studentss' => $studentss,
            'asistencias' => $asistencias,
        ]);
    }


    public function change_status(Students $students)
    {
        if ($students->status == 'AUSENTE') {
            $students->update(['status' => 'PRESENTE'],);
            return redirect()->back()->with('updated', 'OK');
        }

        if ($students->status == 'PRESENTE') {
            $students->update(['status' => 'TARDANZA'],);
            return redirect()->back()->with('updated', 'OK');
        }

        if ($students->status == 'TARDANZA') {
            $students->update(['status' => 'AUSENTE'],);
            return redirect()->back()->with('updated', 'OK');
        }

    }

    public function update(Request $request, Students $students)
    {
        $students->update($request->all());
        return redirect()->route('asistencias.index', $students);
    }
}
