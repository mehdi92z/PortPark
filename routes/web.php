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


Route::group(['middleware' => 'auth'], function () { //////authentification

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

    Route::get('/orders', 'OrderController@index')->name('orders');


    Route::get('/orders/client/{id}', 'OrderController@client')->name('orders/client');

    Route::get('/order/facture/{id}', 'OrderController@facture')->name('order/facture');


    Route::get('/order/{id_bateau}/{id_block}/create', 'OrderController@create')->name('order/create');

    Route::post('/order/store', 'OrderController@store')->name('order/store');

    Route::get('/order/createWithBoat/{id_client}', 'OrderController@createWithBoat')->name('createWithBoat');

    /////passage

    Route::post('/passage/store', 'PassageController@store')->name('passage/store');

    Route::get('/passage/facture/{id}', 'PassageController@facture')->name('passage/facture');


    ////carenage
    Route::post('/carenage/store', 'CarenageController@store')->name('carenage/store');
    Route::get('/carenage/facture/', 'CarenageController@facture')->name('carenage/facture');
    Route::get('/carenages', 'CarenageController@index')->name('carenage/index');
    Route::get('/carenage/terminer/{id}', 'CarenageController@terminer')->name('carenage/terminer');
    ///process

    Route::get('/process/exist/{id_client}', 'ProcessController@exist')->name('process/exist');
    Route::get('/process/places', 'ProcessController@places')->name('process/places');
    Route::post('/process/blocks', 'ProcessController@blocks')->name('process/blocks');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
