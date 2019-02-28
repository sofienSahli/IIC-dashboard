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


// Testing routes
Route::get('mail', ['uses' => '\App\Http\Controllers\Controller@notifyStartuperAccountActivation']);


//User management routes
Route::get('user_management', ['as' => 'user_management', 'uses' => '\App\Http\Controllers\Controller@user_management']);
Route::post('find_users', ['as' => 'find-user', 'uses' => '\App\Http\Controllers\Controller@find_users']);
Route::post('ban_user', ['as' => 'ban_account', 'uses' => '\App\Http\Controllers\Controller@ban_account']);
Route::post('activate_account', ['as' => 'activate_account', 'uses' => '\App\Http\Controllers\Controller@activate_account']);
Route::post('visit_profile', ['as' => 'visit_profile', 'uses' => '\App\Http\Controllers\Controller@visit_profile']);
Route::get('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Controller@register']);
Route::get('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Controller@login']);
Route::get('profile', ['as' => 'profile', 'uses' => '\App\Http\Controllers\Controller@profile']);
Route::post('signin', ['as' => 'sign_in', 'uses' => '\App\Http\Controllers\Controller@add']);
Route::post('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Controller@loginRerection']);
Route::get('disabled-accounts', ['as' => 'disabled-accounts', 'uses' => '\App\Http\Controllers\Controller@accounts_badge']);

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
Route::post('application/upload-presentation', ['as' => 'uppresentation', 'uses' => '\App\Http\Controllers\ApplicationController@upload_presentation']);
Route::post('application/download-presentation', ['as' => 'download-presentation', 'uses' => '\App\Http\Controllers\ApplicationController@downloadPresentation']);
Route::post('application/submit-application', ['as'=>'submit','uses' => '\App\Http\Controllers\ApplicationController@submitApplication'  ]);
Route::post('application/vote-up', ['as'=>'vote-up','uses' => '\App\Http\Controllers\ApplicationController@vote_up'  ]);
Route::post('application/vote-down', ['as'=>'vote-down','uses' => '\App\Http\Controllers\ApplicationController@vote_down'  ]);
Route::get('application/detail/{id}', ['as'=>'app-detail','uses' => '\App\Http\Controllers\ApplicationController@detail'  ]);
Route::get('new-applications', ['as'=>'new-applications','uses' => '\App\Http\Controllers\ApplicationController@new_applications']);

Route::get('message/{id}', ['as' => 'send-message', 'uses' => '\App\Http\Controllers\MessagerieController@sendMessage']);
