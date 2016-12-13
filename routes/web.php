<?php
/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'HomeController@index');
Route::auth();
//Route::get('/home', 'HomeController@index');
/* Company Admin section */
//  Route::get('/', 'EmployeeController@index');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
//        Route::get('dashboard', function () {
//            return view('welcome');
//        })->middleware('auth');
        
        Route::get('/dashboard', 'adminController@index')->middleware('auth');
        Route::get('/logout', 'adminController@logout');
        
    });
});
define("BASE_PATH", 'http://reverse.pnf-sites.info/');
Auth::routes();

Route::get('/home', 'HomeController@index');
