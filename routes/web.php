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
    return view('home');
});
Route::get('/dashboard', function () {
    if (false == Auth::check()) {
        return redirect('/login');
    }
    return view('dashboard');
})->middleware('auth');

Route::get('/forms', function () {
    return view('forms');
})->middleware('auth');
Route::get('/tables', function () {
    return view('tables');
})->middleware('auth');
Route::get('/ui-elements', function () {
    return view('ui-elements');
})->middleware('auth');
Route::get('/page-template', function () {
    return view('page-template');
})->middleware('auth');


Route::get('/blog', 'BlogController@create');
Route::post('/blog', 'BlogController@store');
Route::get('/blog/{id}', 'BlogController@details');
Route::post('/blog/{id}', 'BlogController@update');
Route::get('/blog/{id}/delete', 'BlogController@destroy');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

