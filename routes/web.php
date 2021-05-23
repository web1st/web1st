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

Route::get('/offer', function(){
return view('offer');

});
Route::get('/schedule', function(){
    return view('schedule');
    
    });

Route::get('/development', function(){
    return view('development');
        
    });

Route::get('/portafolio', function(){
        return view('portafolio');
            
        });

Route::get('/community', function(){
        return view('community');
                
        });
 //Route::get('/posts/create', function(){
 //           return view('/create');
                    
 //           });

Route::get('/post', function () {
    $post = App\Post::latest()->get();
 
    return view('post',[
        'post'=>$post
    ]);
});

//Route::get('/posts', function ($id) {
    
//});
Route::get('/posts','PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}', 'PostsController@update');

    