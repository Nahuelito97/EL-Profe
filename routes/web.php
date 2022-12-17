<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/




// Rutas del panel administrativo
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard')->middleware('can:admin.dashboard');

    //rutas para las demas secciones del sistema
    Route::resource('studentss', 'StudentsController');
    Route::resource('profesorss', 'ProfesorssController');
    Route::resource('especialityy', 'EspecialityController');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('asistencias', 'AsistenceController');
    Route::resource('clases', 'ClasseController');
    //Route::resource('profile', 'ProfileController');

});
