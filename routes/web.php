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

//latihan CRUD
Route::get('/data-tables', 'AdminController@dataTables');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); //edit pertanyaan

Route::post('/pertanyaan', 'PertanyaanController@store');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');

Route::put('/pertanyaan/{id}', 'PertanyaanController@update');

Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');



// Tutorial CRUD
// Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
// Route::post('/items', 'ItemController@store'); // menyimpan data
// Route::get('/items', 'ItemController@index'); // menampilkan semua
// Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id
// Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
// Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
// Route::delete('items/{id}', 'ItemController@destroy');


