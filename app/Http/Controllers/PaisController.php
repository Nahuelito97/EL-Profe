<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;


class PaisController extends Controller

{
    public function index()
    {
        return view('admin.pais.index',['todos'=>Pais::orderBy('id','ASC')->get()]);
    }

    public function edit(Pais $todo)
    {
        return response()->json($todo);
    }

    public function store(Request $request)
    {
        $todo = Pais::updateOrCreate(
            ['id'=>$request->id],
            ['name'=>$request->name]
        );

        return response()->json($todo);

    }

    public function destroy(Pais $todo)
    {
        $todo->delete();
        return response()->json('success');
    }

}
