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
Route::get('map/{id}', ['uses' => 'HomeController@map','as'=>'map']);
Route::get('courses/{specialization_id}', ['uses' => 'HomeController@courses','as'=>'courses']);
Route::get('coursesSearch/{specialization_id}', ['uses' => 'HomeController@coursesSearch','as'=>'coursesSearch']);
Route::get('specializations/{collage_id}', ['uses' => 'HomeController@specializations','as'=>'specializations']);
Route::get('SpecializationSearch/{collage_id}', ['uses' => 'HomeController@SpecializationSearch','as'=>'SpecializationSearch']);
Route::get('collages', ['uses' => 'HomeController@collages','as'=>'collages']);
Route::get('CollageSearch', ['uses' => 'HomeController@CollageSearch','as'=>'CollageSearch']);
Route::get('single_course/{course_id}', ['uses' => 'HomeController@single_course','as'=>'single_course']);
Route::get('advices/{course_id}', ['uses' => 'HomeController@advices','as'=>'advices']);
Route::get('report/{user_id}', ['uses' => 'HomeController@report','as'=>'report']);
Route::post('send_report', ['uses' => 'HomeController@send_report','as'=>'send_report']);
Route::get('my_profile', ['uses' => 'HomeController@my_profile','as'=>'my_profile']);
Route::post('update', ['uses' => 'HomeController@update_profile','as'=>'update_profile']);
Route::get('profile/{user_id}', ['uses' => 'HomeController@profile','as'=>'profile']);
Route::get('chatroom_message/{chatroom_id}', ['uses' => 'HomeController@chatroom_message','as'=>'chatroom_message']);
Route::get('chatroomMessagesSearch/{chatroom_id}', ['uses' => 'HomeController@chatroomMessagesSearch','as'=>'chatroomMessagesSearch']);
Route::post('create_message', ['uses' => 'HomeController@create_message','as'=>'create_message']);
Route::get('chatrooms', ['uses' => 'HomeController@chatrooms','as'=>'chatrooms']);
Route::get('chatroomsSearch', ['uses' => 'HomeController@chatroomsSearch','as'=>'chatroomsSearch']);
Route::post('follow/{course_id}', ['uses' => 'HomeController@follow','as'=>'follow']);
Route::post('unfollow/{course_id}', ['uses' => 'HomeController@unfollow','as'=>'unfollow']);


Route::post('signup', ['uses' => 'AuthenticationController@signup','as'=>'signup']);
Route::post('signin', ['uses' => 'AuthenticationController@signin', 'as'=>'signin']);
Route::post('logout', ['uses' => 'AuthenticationController@logout','as'=>'logout']);



// Route::group([
//     'middleware'  => 'auth',
// ], function() {
// Route::get('profile', ['uses' => 'HomeController@profile','as'=>'profile']);
// });