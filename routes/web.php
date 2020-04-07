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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [
    'as' => 'front.home',
    'uses' => 'FrontController@index',
]);

Route::get('/contact', [
    'as' => 'front.contact',
    'uses' => 'FrontController@contact',
]);

Route::post('/contact/send/message', [
    'as' => 'front.contact.send.message',
    'uses' => 'FrontController@sendMessage',
]);

Route::post('/loan/send', [
    'as' => 'front.loan.send',
    'uses' => 'FrontController@sendLoan',
]);

Route::get('/loan', [
    'as' => 'front.loan',
    'uses' => 'FrontController@loan',
]);

Route::get('/about', [
    'as' => 'front.about',
    'uses' => 'FrontController@about',
]);

Route::get('/news', [
    'as' => 'front.news',
    'uses' => 'FrontController@news',
]);

Route::get('/condition', [
    'as' => 'front.condition',
    'uses' => 'FrontController@condition',
]);
Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
