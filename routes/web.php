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
Route::get('/',  'ViewController@start');
Route::get('/start',  'ViewController@start');
Route::get('/welcome',  'ViewController@welcome');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/save', 'HomeController@save');
Route::get('/add_vazifa', 'HomeController@add');
Route::get('/delete', 'HomeController@delete');
Route::get('/edit', 'HomeController@edit');
Route::get('/save/{id}', 'HomeController@save_e');


Route::get('/save_student/{id}', 'StudentController@save');
Route::get('/add_vazifa_student', 'StudentController@add');

Route::get('/view', 'StudentController@index');
Route::get('/profile', function () {
    return "hello world";
})->middleware('auth');
Route::get('/baholash/{id}', 'HomeController@baholash');
Route::get('/add_baho', 'HomeController@add_baho');
Route::get('/delete_baho', 'StudentController@delete');
Route::get('/edit_baho', 'HomeController@edit_baho');
