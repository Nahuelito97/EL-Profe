<?php

namespace App\Http\Controllers;

use App\Students;
use App\Profesorss;
use App\Especiality;
use App\User;
use App\Materias;;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{
    public function index(){
        $students =Students::all()->count();
        $profesors = Profesorss::all()->count();
        $especialidades = Especiality::all()->count();
        $users = User::all()->count();
        $materias = Materias::all()->count();

        return view('admin.dashboard.index', compact('students', 'profesors', 'especialidades', 'users', 'materias'));
    }
}
