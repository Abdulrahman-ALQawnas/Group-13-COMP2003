<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['uses' => 'HomeController@index','as'=>'index']);
Route::get('login', ['uses' => 'HomeController@login','as'=>'login']);
Route::get('register', ['uses' => 'HomeController@Register','as'=>'register']);
Route::get('map', ['uses' => 'HomeController@map','as'=>'map']);
Route::get('courses', ['uses' => 'HomeController@courses','as'=>'courses']);
Route::get('single_course', ['uses' => 'HomeController@single_course','as'=>'single_course']);
Route::get('advices', ['uses' => 'HomeController@advices','as'=>'advices']);
Route::get('chat', ['uses' => 'HomeController@chat','as'=>'chat']);
Route::get('profile', ['uses' => 'HomeController@profile','as'=>'profile']);

Route::post('signup', ['uses' => 'AuthenticationController@signup','as'=>'signup']);
Route::post('login', ['uses' => 'AuthenticationController@login', 'as'=>'signin']);

// Route::group([
//     'middleware'  => 'auth',
// ], function() {
// Route::get('profile', ['uses' => 'HomeController@profile','as'=>'profile']);
// });