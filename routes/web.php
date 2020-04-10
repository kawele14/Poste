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




//Users
Route::get('/dashboard/personnal_info', [
    'as' => 'front.users.info',
    'uses' => 'UsersController@addPersonal',
]);
Route::get('/dashboard/account_info', [
    'as' => 'front.users.account',
    'uses' => 'UsersController@addAccount',
]);
Route::post('/contact/send/message_modal', [
    'as' => 'front.users.send.message',
    'uses' => 'UsersController@sendMessage',
]);
Route::post('/save/info', [
    'as' => 'front.pinfo.save',
    'uses' => 'UsersController@storePersonalInfo',
]);
Route::post('/save/bank/info', [
    'as' => 'front.binfo.save',
    'uses' => 'UsersController@storeBankInfo',
]);









Auth::routes(['register' => true]);

Route::get('/home', 'UsersController@index')->name('home');
