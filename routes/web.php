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

Route::get('/drive', function () {
	//return redirect("/drive#/my-drive");
    return view('clientSide/mydrive');  
});

Route::get('test/{otherLinks?}', 'FolderController@getPage')->where('otherLinks', '(.*)');