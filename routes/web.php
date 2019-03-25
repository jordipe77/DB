<?php

Route::get('/login', function () {
     return view('login');
 });
Route::get('/registro',function ()
 {
 	return view ('registro');
 });

Route::get('/hacerDonacion',function ()
{
	return view ('hacerDonacion	');
});
Route::get('/donacionUsuario',function ()
{
	return view ('donacionUsuario');
});
Route::get('/dashboard',function ()
{
	return view ('dashboard');
});
Route::get('/admin',function ()
{
	return view ('admin');
});


Route::resource('donacion', 'donacionController');
// Route::get('/', function () {
//     return view('index');
// });





//LOGIN
Route::get('/login', 'Auth\LoginController@showlogin')->name('login');

Route::post('/login', 'Auth\Logincontroller@login');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard','HomeController@index');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



//REGISTRO

Route::get('/registro', 'Auth\RegisterController@showregistro');
Route::get('/registro', 'Auth\RegisterController@register');
