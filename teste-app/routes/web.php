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
    //return view('welcome');
    return view('index');
});

Route::prefix('income')->group(
    function () {
        Route::get('/', 'income\IncomeController@index');
        Route::get('/chart', 'income\IncomeController@testChart');
});

Route::prefix('expentures')->group(
    function () {
        Route::get('/', 'expenture\ExpentureController@index');
});

Route::prefix('contact')->group(
    function () {
        Route::get('/', 'contact\ContactController@index');
        Route::get('create/', 'contact\ContactController@create');
        Route::get('/details/{contact}', 'contact\ContactController@show');
        Route::get('/{contact}/edit/', 'contact\ContactController@edit');
        Route::post('/store', 'contact\ContactController@store');
        Route::post('/update/{contact}', 'contact\ContactController@update');
        Route::post('/destroy/{contact}', 'contact\ContactController@destroy');
});

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
    
    $token = csrf_token();    
});
    