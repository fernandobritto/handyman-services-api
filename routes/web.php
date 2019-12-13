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


Route::get('/', 'GenesisController@start');



Route::get('/bitcoin', function () {
    return view('contents.bitcoin');
})->name('Bitcoin');


Route::get('/litecoin', function () {
    return view('contents.litecoin');
})->name('Litecoin');


Route::get('/bcash', function () {
    return view('contents.bcash');
})->name('BCash');


Route::get('/ripple', function () {
    return view('contents.ripple');
})->name('Ripple');


Route::get('/ethereum', function () {
    return view('contents.ethereum');
})->name('Ethereum');
