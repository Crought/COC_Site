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

//Route::group(['middleware' => 'auth.admin'], function() {

    Route::group(['prefix' => 'scenario'], function() {
        Route::get('/list', 'ScenarioController@getList')->name('scenario.list');
        Route::get('/detail/{id}', 'ScenarioController@getDetail')->name('scenario.detail');
        Route::get('/post', 'ScenarioController@getPost')->name('scenario.getPost');
        Route::post('/post', 'ScenarioController@postPost')->name('scenario.postPost');
    });

    Route::get('/', 'PagesController@getIndex')->name('index');

//});
