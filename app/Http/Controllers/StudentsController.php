<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateeRequest;
use Session;

class StudentsController extends Controller
{
    public function index()
    {
        $studentss = Students::orderBy('id', 'ASC')->paginate(10);
        return view('admin.students.index', compact('studentss'));

    }


    public function create()
    {
        return view('admin.students.create');
    }

    public function store(StoreRequest $request)
    {
        Students::crate($request->all());
        return redirect()->route('studentss.index');
    }


    public function show(Students $students)
    {
        return view('admin.students.show', compact('students'));
    }

    public function edit(Students $students)
    {
        return view('admin.students.show', compact('students'));
    }


    public function update(UpdateeRequest $request, Students $students)
    {
      $students->update($request->all());
      return redirect()->route('studentss.index');
    }


    public function destroy(Students $students)
    {
        if ($students) {
            $students->delete();

            Session::flash('success', 'Tag deleted successfully');
        }

        return redirect()->back();
    }
}
