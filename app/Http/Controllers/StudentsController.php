<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateeRequest;
use App\Http\Requests\StudentsRequest;
use RealRashid\SweetAlert\Facades\Alert;

class StudentsController extends Controller
{
    public function index()
    {
        $studentss = Students::orderBy('id', 'ASC')->Paginate(5);
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
    }


    public function show($id)
    {
        $studentss = Students::find($id);
         //return response()->json($studentss);
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
        $studentss->delete();
        return redirect(route('studentss.index'))->with('delete', 'OK');
    }
}
