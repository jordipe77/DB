<?php



Route::get('/login', function () {
    return view('login');
});
Route::get('/registro',function ()
{
	return view ('registro');
});
Route::get('/introDonacion',function ()
{
	return view ('introDonacion	');
});
// Route::get('/', function () {
//     return view('index');
// });
