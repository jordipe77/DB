<?php

Route::get('/', function () {
     return view('dashboard');
 });


Route::get('/dashboard',function ()
{
	return view ('dashboard');
});

 Route::resource('/introducirDonante','donanteController' ); // comentar cuando funcione intro donante


 Route::get('/editUsuario','UsuarioController@update' );

 Route::get('/editDonante','donanteController@update' );

//LOGIN
Route::get('/login', 'Auth\LoginController@showlogin')->name('login');
Route::post('/registro', 'Auth\RegisterController@registro');
Route::post('/login', 'Auth\Logincontroller@login');
Route::get('/logout','Auth\LoginController@logout')->name('logout');



Route::group(['middleware' => ['auth']], function () {
Route::get('/enviarDonante', 'introDonativoController@enviar');
Route::resource('/introDonativo', 'introDonativoController');

 Route::get('/nuevoDonante/{mibool}',function ()
 {
   return view ('/nuevoDonante');
});

Route::resource('/hacerDonacion', 'donativoController');
    // Route::resource('/donacionUsuario','UsuarioController' ); // descomentar cuando funcione el intro Donante
Route::get('/admin',function ()
{
	return view ('admin');
});


});

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/dashboard','HomeController@index');
//REGISTRO
Route::get('/registro', 'Auth\RegisterController@showregistro')->name('registro');
Route::post('/registro', 'Auth\RegisterController@registro');

Route::get('/introducirDonante', function () {
    return view('introducirDonante');
});

Route::get('/buscarUsuario', function () {
    return view('buscarUsuario');
});


Route::resource('/buscarUsuario','UsuarioController' );

Route::get('/buscarDonante', function () {
    return view('buscarDonante');
});


Route::resource('/buscarDonante','donanteController' );

Route::get('/buscarDonacion', function () {
    return view('buscarDonacion');
});


Route::resource('/buscarDonacion','donativoController' );



Route::get('/nuevoDonante', function(){
    return view('nuevoDonante');
});

