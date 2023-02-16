<?php

use App\Http\Controllers\AsistenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinciaController;

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
    Route::resource('especialities', 'EspecialityesController');
    Route::resource('todos', 'PaisController');
    Route::resource('provincias', 'ProvinciaController');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('asistencias', 'AsistenceController');
    Route::resource('clases', 'ClasseController');
    //Route::resource('profile', 'ProfileController');
    Route::get('change_status/asistencias/{students}', [AsistenceController::class, 'change_status'])->name('change.status.students');


    //------Todos/Paises
    Route::get('todos/{todo}/edit', 'PaisController@edit');
    Route::post('todos/store', 'PaisController@store');
    Route::delete('todos/destroy/{todo}', 'PaisController@destroy');
    //------



    //----Provincias--
    /*Route::get('create', 'ProvinciaController@create')->name('provincias.create');
    Route::post('create', 'ProvinciaController@store')->name('provincias.store');
    Route::get('show/{provincias}', 'ProvinciaController@edit')->name('provincias.edit');
    Route::put('provincias/{provincias}', 'ProvinciaController@update')->name('provincias.update');
    Route::put('destroy/{provincias}', 'ProvinciaController@destroy')->name('provincias.destroy');*/

});
