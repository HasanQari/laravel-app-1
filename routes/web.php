<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------c
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
|--------------------------------------------------------------------------
## Example 

Route::get('/users/{id}/{name}', function($id,$name'){
    return 'this is user'.$name.'with an id of '.$id;
});

Route::post('/hello', function(){
    return '<h1>Hello World</h1>';
})



|--------------------------------------------------------------------------
*/

Route::get('/index', 'PagesController@index');

Route::get('/', 'PagesController@vURS');
Route::get('/about', 'PagesController@about');
Route::get('/RegReq', 'PagesController@RegReq');
Route::post('/RegReq', 'PostsController@store');
Route::get('/formSubmit', 'PagesController@formSubmit');


Route::resource('posts', 'PostsController');
