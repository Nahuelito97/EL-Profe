<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $name = $request->get('buscarpor');
        $consulta=User::select('users.*');

        $users = $consulta->where('name', 'LIKE', '%'. $name . '%')->paginate(5);

        return view('admin.users.index', compact('users'));
    }


    public function edit(User $user){
        $roles =Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user){

        $user->roles()->sync($request->roles);

        return redirect()->route('users.edit', $user)->with('info', 'El rol o los roles fueron asignados correctamente');

    }
}
