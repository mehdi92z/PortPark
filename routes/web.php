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

Route::get('/', function () {
    return view('back.home');
})->name('home');




Route::get('/portpark', function () {
    return view('back.index');
});

//////BLOCK

Route::get('/blocks', 'blockController@index')->name('blocks');
Route::get('/block/create', 'blockController@create')->name('block/create');
Route::post('/block/store', 'blockController@store')->name('block/store');


////reservation


Route::get('/reservation/{id}/create', 'reservationController@create')->name('reservation/create');
Route::post('/reservation/{id}/store', 'reservationController@store')->name('reservation/store');


/////////client
Route::get('/clients', 'clientController@index')->name('clients');
Route::get('/client/create', 'clientController@create')->name('client/create');
Route::post('/client/store', 'clientController@store')->name('client/store');

