<?php

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

Route::group(['namespace' => 'Activity', 'prefix' => 'activity'], function () {
    Route::get('list/{size?}', 'ActivityController@list');
    Route::get('detail/{activity}', 'ActivityController@detail');
    Route::delete('delete/{activity}', 'ActivityController@delete');
    Route::post('add', 'ActivityController@add')->middleware('activity');
    Route::put('update/{activity}', 'ActivityController@update');
});

Route::group(['namespace' => 'Advert', 'prefix' => 'advert'], function () {
    Route::post('add', 'AdvertController@add');
    Route::put('update/{advert}', 'AdvertController@update');
    Route::delete('delete/{advert}', 'AdvertController@delete');
    Route::get('list/{size?}', 'AdvertController@list');
});

Route::group(['namespace' => 'Application', 'prefix' => 'application-category'], function () {
    Route::post('add', 'ApplicationCategoryController@add');
    Route::put('change/{applicationCategory}', 'ApplicationCategoryController@change');
    Route::put('update/{applicationCategory}', 'ApplicationCategoryController@update');
    Route::get('list/{size?}', 'ApplicationCategoryController@list');
});

Route::group(['namespace' => 'Application', 'prefix' => 'application'], function () {
    Route::get('list/{size?}', 'ApplicationController@list');
    Route::get('category-list', 'ApplicationController@categoryList');
    Route::post('add', 'ApplicationController@add');
    Route::put('update/{application}', 'ApplicationController@update');
    Route::put('change/{application}', 'ApplicationController@change');
});

Route::get('/swagger/doc', 'SwaggerController@doc');
