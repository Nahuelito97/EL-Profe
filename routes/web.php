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
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    //rutas para las demas secciones del sistema
    Route::resource('studentss', 'StudentsController');
    Route::resource('profesorss', 'ProfesorssController');
    /*Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');


    Route::get('setting', 'SettingController@edit')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');*/

});
