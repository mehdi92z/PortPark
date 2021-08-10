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
Route::get('/client/{id}/edit', 'clientController@edit')->name('client/edit');
Route::post('/client/store', 'clientController@store')->name('client/store');
Route::put('/client/update/{id}', 'clientController@update')->name('client/update');
Route::delete('/client/{id}/destroy','clientController@destroy')->name('client/destroy');




/////bateau
Route::resource('/bateau','BateauController')->only(['index','create','store','destroy']);

Route::get('/bateau/create2/{id_client}', 'BateauController@create')->name('bateau2/create');


//////orders

Route::get('/order/{id_client}/{id_bateau}/create', 'OrderController@create')->name('order/create');

Route::get('/order/createWithBoat/{id_client}', 'OrderController@createWithBoat')->name('createWithBoat');


///process

Route::get('/process/exist/{id_client}', 'ProcessController@exist')->name('process/exist');


Route::get('/process/blocks', 'ProcessController@blocks')->name('process/blocks');