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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-industry', 'CompanyController@createcompany')->name('home');

Route::post('/industry-store', 'CompanyController@storecompany');

Route::get('/drop-industry/{id}', 'CompanyController@deletecompany');
