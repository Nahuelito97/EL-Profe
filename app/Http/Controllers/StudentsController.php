<?php

namespace App\Http\Controllers;

use App\Direction;
use App\Students;
use App\Pais;
use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateeRequest;
use App\Http\Requests\StudentsRequest;
use App\Localidad;
use App\Provincies;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;


class StudentsController extends Controller
{
    public function index()
    {
        $country = Pais::all();
        $province = Provincies::all();
        $localities = Localidad::all();
        $directions = Direction::all();

        $studentss = Students::orderBy('id', 'ASC')->Paginate(5);
        return view(
            'admin.students.index',
            compact(
                'studentss',
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

        return view(
            'admin.students.create',
            compact('country', 'province', 'localities', 'directions')
        );
    }

    public function store(Request $request)
    {
        $request->validate([                        /* Agregamos reglas de validación para el formulario. */
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'dni' => 'required|unique:students|min:8|max:8',
            'date_of_birth' => 'required|date|before_or_equal:today',
            'phone' => 'bail|required|unique:students|min:13|max:13',
            'email' => 'required||unique:students,email',
            'pais_id' => 'required',
            'provincies_id' => 'required',
            'localities_id' => 'required',
            'directions_id' => 'required'
        ]);


        $studentss = Students::create($request->all());

        Alert::success('Success', 'The stuent was created correctly.');

        return redirect()->route('studentss.index', $studentss);
    }


    public function show(Students $studentss)
    {
        //return response()->json($studentss);
        return view('admin.students.show', compact('studentss'));
    }

    public function edit(Students $studentss)
    {   
        $country = Pais::all();
        $province = Provincies::all();
        $localities = Localidad::all();
        $directions = Direction::all();
        return view('admin.students.edit', compact('studentss','country', 'province', 'localities', 'directions'));
        return redirect(route('studentss.index'));
    }


    public function update(UpdateeRequest $request, Students $studentss)
    {
        $studentss->update($request->all());
        Alert::success('Info', 'The student was successfully updated.');

        return redirect(route('studentss.index'));
    }


    public function destroy($id)
    {
        $studentss = Students::find($id);
        $studentss->delete();
        return redirect(route('studentss.index'))->with('delete', 'OK');
    }
}
