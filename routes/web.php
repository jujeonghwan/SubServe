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

// Route::get('/hello', function () {
//     // return view('index');
//     return '<h1>Hello world</h1>';
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
// 	return 'This is user ' . $name . ' with an id of ' . $id;
// });

// Route::get('/about', function () {
// 	return view('company.about');
// });

// Route::get('/', 'CompaniesController@index');
Route::get('/', 'CompaniesController@about');
Route::get('/about', 'CompaniesController@about');



