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

/** Home */
Route::group( ['middleware' => 'auth' ], function() {
    Route::get('/', 'TaskController@index');
    Route::post('task/store', 'TaskController@store');
});

/** Login */
Route::get('login', 'HomeController@login')->name('login');

/** Auth */
Route::get('auth/callback/{provider}', 'Auth\SocialAuthController@callback');
Route::get('auth/redirect/{provider}', 'Auth\SocialAuthController@redirect');
Route::get('auth/logout', 'Auth\SocialAuthController@logout');
