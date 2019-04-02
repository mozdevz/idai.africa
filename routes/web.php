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

Route::get('/home/{id?}', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/*Voulunteer routes*/
Route::post('/volunteer/new', 'VolunteerController@AddVolunteer')->middleware('auth');

Route::get('/volunteer/cat/new', 'VolunteerController@AddVolunteerCategory')->name('add_volunteer_category_form')->middleware('auth');

Route::post('/volunteer/cat/add', 'VolunteerController@StoreVolunteerCategory')->middleware('auth');

Route::get('/volunteer/asset/new', 'VolunteerController@AddVolunteerAsset')->name('add_volunteer_asset_form')->middleware('auth');

Route::post('/volunteer/asset/add', 'VolunteerController@StoreVolunteerAsset')->middleware('auth');




Route::get('/person/new','PersonController@addForm');

Route::post('/person/new','PersonController@add')->name('addPerson')->middleware('Auth');
