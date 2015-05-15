<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('post/listing', array('uses' => 'PostController@listing', 'as' => 'get.post.listing'));

//routes with parameters and parameter restrictions
//Route::get('post/{id}/{slug}', array('uses' => 'PostController@single', 'as' => 'get.post.single'))->where(array('id' =>'[1-9][0-9]*', 'slug' => '[a-zA-Z0-9-_]+'));
Route::get('post/{id}', array('uses' => 'PostController@single', 'as' => 'post.post.single'))->where(array('id' => '[1-9][0-9]*'));

//routes with POST submission
Route::get('post/update/{id}', array('uses' => 'PostController@update', 'as' => 'get.post.update'))->where(array('id' => '[1-9][0-9]*'));
Route::get('post/destroy/{id}', array('uses' => 'PostController@destroy', 'as' => 'get.post.destroy'))->where(array('id' => '[1-9][0-9]*'));

Route::get('post/insert', array('uses' => 'PostController@insert', 'as' => 'get.post.insert'));

Route::resource('user', 'UserController');