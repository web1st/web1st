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
/*
Route::get('/service', function (){
    $name = request ('name');
    return view('service', [
        'name' => $name

    ]);
*/
//Route::get('/service/{post}', 'ServiceController@show');

Route::get('/service', function () {
    return view('service');
});