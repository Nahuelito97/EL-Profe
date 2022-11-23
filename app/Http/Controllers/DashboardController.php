<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $students =Students::all()->count();



        return view('admin.dashboard.index', compact('students'));
    }
}
