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

Route::get('/', 'Main\MainController@index');

// Authentication routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function() {
    
    get('/', 'AdminController@index');

    Route::group(['prefix' => 'issues'], function() {
        get('/', 'IssueController@showList');
        get('/add', 'IssueController@create');
        get('/status/{issue_status}', 'IssueController@showListByStatus'); 
        get('/{issue_id}', 'IssueController@show');
    });
    
    Route::group(['prefix' => 'users', 'middleware' => 'auth.admin'], function() {
        get('/', 'UserController@showList');
        get('/add', 'UserController@create');
        get('/type/{user_role}', 'UserController@showListByRole');
        get('{user_id}', 'UserController@show');
    });
  
});