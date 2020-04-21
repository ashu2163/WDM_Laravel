<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('forms','FormController');

// Route::get('/Forms', function()
// {
//     return view('index');
// });

Route::get('/semblanza', function()
{
    return view('semblanza');
});

Route::get('/centro_augusto', function()
{
    return view('centro_augusto');
});

Route::resource('proyectos','ProyectosController');
Route::resource('eventos','EventosController');
Route::resource('videos','VideoController');

Route::get('/adminproject', 'adminProjectController@index')->name('adminproject.index');
Route::get('/adminproject/{id}/edit','adminProjectController@edit')->name('adminproject.edit');
Route::post('/adminproject/delete','adminProjectController@destroy')->name('adminproject.destroy');
// Route::get('/create','adminProjectController@create')->name('adminproject.create');
Route::post('/create1','adminProjectController@store')->name('adminproject.store');
Route::post('/adminproject/update','adminProjectController@update')->name('adminproject.update');

Route::get('/adminevent', 'adminEventController@index')->name('adminevent.index');
Route::post('/adminevent/update','adminEventController@update')->name('adminevent.update');
Route::post('/create','adminEventController@store')->name('adminevent.store');
Route::post('/adminevent/delete','admineventController@destroy')->name('adminevent.destroy');

Route::get('/adminvideo', 'adminVideoController@index')->name('adminvideo.index');
Route::post('/adminvideo/update','adminVideoController@update')->name('adminvideo.update');
Route::post('/adminvideo/delete','adminvideoController@destroy')->name('adminvideo.destroy');

Route::get('/equipo', function()
{
    return view('equipo');
});

