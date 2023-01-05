<?php

namespace App\Http\Controllers;

use App\Students;
use App\Profesorss;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{
    public function index(){
        $students =Students::all()->count();
        $profesors = Profesorss::all()->count();

        return view('admin.dashboard.index', compact('students', 'profesors'));
    }
}
