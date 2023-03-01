<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;
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

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'dni' => 'required|unique:users|min:8|max:8',
            'date_of_birth' => 'required|date|before_or_equal:today',
            'phone' => 'bail|required|unique:users|min:13|max:13',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'dni' => $request->dni,
            'date_of_birth' => $request->date_of_birth,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'description' => $request->description,
        ]);

        Alert::success('Success', 'The user was created correctly.');

        return redirect()->route('users.index', $user);
    }

    public function show(User $user)
    {
        //return response()->json($studentss);
        return view('admin.users.show', compact('user'));
    }


    public function edit(User $user){
        $roles =Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user){

        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'dni' => 'nullable',
            'date_of_birth' => 'nullable',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:13',
            'email' => 'unique:users,email,' . $user->id,
        ]);

        $user->roles()->sync($request->roles);

        $user->update($request->all());

        Alert::success('Info', 'The user was successfully updated.');
        return redirect()->route('users.index', $user);
    }


    public function destroy(User $user){
        if($user){
            $user->delete();
        }
        return redirect(route('users.index'))->with('delete', 'OK');
    }

    public function profile(){
        $user = auth()->user();

        return view('admin.users.profile', compact('user'));
    }

    public function profile_update(Request $request){
        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'sometimes|nullable|min:8',
            'image'=> 'sometimes|nullable|image|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->description = $request->description;

        if($request->has('password') && $request->password !== null){
            $user->password = bcrypt($request->password);
        }

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/user/', $image_new_name);
            $user->image = '/storage/user/' . $image_new_name;
        }
        $user->save();

        Alert::success('Info', 'The user was successfully updated.');
        return redirect()->back();
    }

}
