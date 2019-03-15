<?php



Route::get('/', function () {
    return view('login');
});
Route::get('/registro',function ()
{
	return view ('registro');
});
// Route::get('/', function () {
//     return view('index');
// });
