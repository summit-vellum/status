<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the ArticleServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['namespace'=>'Module\Article\Http\Controllers'], function(){
//     Route::resource('article', 'ArticleController');
// });

Route::group(['middleware' => 'web'], function() {
    
    Route::resource('status', 'App\Http\Controllers\ResourceController');

    Route::group(['prefix' => 'modal'], function(){
        Route::name('modal.')->group(function(){
            Route::resource('status', 'App\Http\Controllers\ResourceController');
        });
    });

});
