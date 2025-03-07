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
Route::get('courses/{specialization_id}', ['uses' => 'HomeController@courses','as'=>'courses']);
Route::get('specializations/{collage_id}', ['uses' => 'HomeController@specializations','as'=>'specializations']);
Route::get('collages', ['uses' => 'HomeController@collages','as'=>'collages']);
Route::get('single_course/{course_id}', ['uses' => 'HomeController@single_course','as'=>'single_course']);
Route::get('advices/{course_id}', ['uses' => 'HomeController@advices','as'=>'advices']);
Route::get('chat', ['uses' => 'HomeController@chat','as'=>'chat']);
Route::get('report/{user_id}', ['uses' => 'HomeController@report','as'=>'report']);
Route::post('send_report', ['uses' => 'HomeController@send_report','as'=>'send_report']);
Route::get('my_profile', ['uses' => 'HomeController@my_profile','as'=>'my_profile']);
Route::post('update', ['uses' => 'HomeController@update_profile','as'=>'update_profile']);
Route::get('profile/{user_id}', ['uses' => 'HomeController@profile','as'=>'profile']);

Route::post('signup', ['uses' => 'AuthenticationController@signup','as'=>'signup']);
Route::post('signin', ['uses' => 'AuthenticationController@signin', 'as'=>'signin']);
Route::post('logout', ['uses' => 'AuthenticationController@logout','as'=>'logout']);



// Route::group([
//     'middleware'  => 'auth',
// ], function() {
// Route::get('profile', ['uses' => 'HomeController@profile','as'=>'profile']);
// });