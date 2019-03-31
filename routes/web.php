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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/person/new','PersonController@addForm')->name('person.view');

Route::post('/person/new','PersonController@add')
    ->name('person.store')->middleware('Auth');

Route::get('/organizations/login', 'OrganizationController@index')
    ->name('organizations.login');

Route::get('/organizations/find-volunteers', 
	'OrganizationController@findVolunteersView')
->name('organizations.findVolunteersView');

Route::post('/organizations/find-volunteers', 
	'OrganizationController@findVolunteers')
->name('organizations.findVolunteers');

Route::get('/organizations/new-message', 
	'OrganizationController@newMessage')
->name('organizations.newMessage');
