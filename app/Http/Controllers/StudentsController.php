<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateeRequest;
use App\Http\Requests\StudentsRequest;
use Session;

class StudentsController extends Controller
{
    public function index()
    {
        $studentss = Students::orderBy('id', 'ASC')->paginate(5);
        return view('admin.students.index', compact('studentss'));

    }


    public function create()
    {
        return view('admin.students.create');
    }

    public function store(StudentsRequest $request)
    {
        Students::create($request->all());

        return redirect()->route('studentss.index');
        // return redirect()->route('libros')

    }


    public function show(Students $studentss)
    {
        return view('admin.students.show', compact('studentss'));
    }

    public function edit(Students $studentss)
    {
        return view('admin.students.edit', compact('studentss'));
    }


    public function update(UpdateeRequest $request, Students $studentss)
    {
      $studentss->update($request->all());
      return redirect()->route('studentss.index');
    }


    public function destroy($id)
    {
        $studentss = Students::find($id);
        if (!$studentss) {
            Session::flash("error","The student doesn't exist");
            return redirect()->back();
        }
        $studentss->delete();
        Session::flash('success', 'Student deleted successfully');
        return redirect(route('studentss.index'));
        /*$studentss->update([
            'borrado' => 1,
        ]);
        return redirect(route('studentss.index'));*/
    }
}
