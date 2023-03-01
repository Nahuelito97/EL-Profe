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

    //rutas para las demas secciones del sistema $this->middleware('auth', ['except' => ['index', 'show']]);
    Route::resource('studentss', 'StudentsController')->middleware('auth');
    Route::resource('profesorss', 'ProfesorssController')->middleware('auth');
    Route::resource('especialities', 'EspecialityesController')->middleware('auth');
    Route::resource('todos', 'PaisController')->middleware('auth');
    Route::resource('provincias', 'ProvinciaController')->middleware('auth');
    Route::resource('cities', 'LocalidadesController')->middleware('auth');
    Route::resource('materias', 'MateriasController')->middleware('auth');
    Route::resource('users', 'UserController')->middleware('auth');
    Route::resource('roles', 'RoleController')->middleware('auth');
    Route::resource('asistencias', 'AsistenceController')->middleware('auth');
    Route::resource('clases', 'ClasseController')->middleware('auth');
    //Route::resource('profile', 'ProfileController');
    Route::get('/profile', 'UserController@profile')->name('users.profile')->middleware('auth');
    Route::post('/profile', 'UserController@profile_update')->name('users.profile.update')->middleware('auth');
    Route::get('change_status/asistencias/{students}', [AsistenceController::class, 'change_status'])->name('change.status.students')->middleware('auth');


    //------Todos/Paises
    /*
    Route::get('todos/{todo}/edit', 'PaisController@edit');
    Route::post('todos/store', 'PaisController@store');
    Route::delete('todos/destroy/{todo}', 'PaisController@destroy');
    //------
*/


    //----Provincias--
    /*Route::get('create', 'ProvinciaController@create')->name('provincias.create');
    Route::post('create', 'ProvinciaController@store')->name('provincias.store');
    Route::get('show/{provincias}', 'ProvinciaController@edit')->name('provincias.edit');
    Route::put('provincias/{provincias}', 'ProvinciaController@update')->name('provincias.update');
    Route::put('destroy/{provincias}', 'ProvinciaController@destroy')->name('provincias.destroy');*/

});
