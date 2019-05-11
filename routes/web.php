<?php

use Illuminate\Http\Request;

Route::domain('127.0.0.1')->group(function () { 
  
    // Landing Page Routes
    Route::get('/', function () {
        return view('welcome');
    });
    
    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
    
    // Catch All Route
    Route::any('{any}', function () {
        abort(404);
    })->where('any', '.*');

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

// Authentication Web Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    
// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

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

// Login Routes...
##Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
##Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
##Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
##Route::get('logout', 'Auth\LoginController@logout');

// Registration Routes...
##Route::get('register', ['as' => 'register', function(){abort(499, 'Not available in demo mode.');}]);
//Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
//Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
//Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
##Route::post('password/email', ['as' => 'password.email', function(){abort(499, 'Not available in demo mode.');}]);
//Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
//Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
//Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);


##Route::get('/', 'HomeController@index')->name('home');

##Route::get('/home', 'HomeController@index')->name('home-one');

##Route::get('/home-two', 'HomeController@homeTwo')->name('home-two');


##Auth::routes();

##Route::get('/home', 'HomeController@index')->name('home');
