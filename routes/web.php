<?php



// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/registro',function ()
// {
// 	return view ('registro');
// });
Route::get('/hacerDonacion',function ()
{
	return view ('hacerDonacion	');
});
Route::get('/introDonacion',function ()
{
	return view ('introDonacion');
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


Route::get('/login', 'Auth\LoginController@showlogin')->name('login');
Route::get('/registro', 'Auth\RegisterController@showregistro')->name('registro');
Route::post('/registro', 'Auth\RegisterController@registro');

Route::post('/login', 'Auth\Logincontroller@login');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard','HomeController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Registro por defecto laravel
// Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');