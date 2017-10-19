<?php

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

Route::resource('/persona', 'PersonaController');


//Tipo de servicio
Route::resource('/servicio', 'ServicioController');
Route::get('/lista_servicio','ServicioController@lista');
//fin de tipo de servicio

Route::get('/home', 'AppController@index');

Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
		return view('auth.login');
	});

// Login del sistema
//Route::post('/logeo',array('as'=>'login', 'uses'=>'LoginController@login_gad'));

//Route::get('/logout','LoginController@logout_gad');

Route::get('/', function () {
	if (Auth::guest()){
    	return view('auth.login');
    }else{
    	return Redirect('/home');
    }
	});
});

Auth::routes();
