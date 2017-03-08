<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('/my-drive', 'FolderController@drive');
Route::get('/folder/{id}/{folder_name}', 'FolderController@fetchFolder');
Route::get('/folders/map/{folders?}', 'FolderController@map')->where('folders', '(.*)');
//Route::get('/folders/map/{request}', 'FolderController@map');
