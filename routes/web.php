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
Route::get('/dashboard',function ()
{
	return view ('dashboard');
});


Route::resource('donacion', 'donacionController');
// Route::get('/', function () {
//     return view('index');
// });
