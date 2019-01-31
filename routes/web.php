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

//User management routes
Route::get('user_management', ['as' => 'user_management', 'uses' => '\App\Http\Controllers\Controller@user_management']);
Route::get('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Controller@register']);
Route::get('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Controller@login']);
Route::get('profile', ['as' => 'profile', 'uses' => '\App\Http\Controllers\Controller@profile']);
Route::post('signin', ['as' => 'sign_in', 'uses' => '\App\Http\Controllers\Controller@add']);
Route::post('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Controller@loginRerection']);
Route::get('logout', ['as' => 'logout', 'uses' => function () {
    Session::forget('user');
    if (!Session::has('user')) {
        return redirect('login');
    }
}]);


Route::get('dashboard', ['as' => 'dashboard', 'uses' => '\App\Http\Controllers\DashBoardController@index']);



Route::get('application/index', ['as' => 'applicationIndex', 'uses' => '\App\Http\Controllers\ApplicationController@index']);
Route::get('template', ['as' => 'downloadTemplate', 'uses' => '\App\Http\Controllers\ApplicationController@downloadTemplate']);
Route::post('application/new', ['as' => 'newApplication', 'uses' => '\App\Http\Controllers\ApplicationController@add']);