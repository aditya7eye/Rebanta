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




Route::get('/', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::post('check_user', 'LoginController@check_user');

Route::get('enterclient/{id}', 'LoginController@enterclient');
Route::get('enterbranch/{id}', 'LoginController@enterbranch');



Route::group(['middleware' => 'usersession'], function () {

////////----Master_Dashboard
Route::get('master_dashboard', 'MasterController@master_dashboard')->name("master_dashboard");
Route::get('create_client', 'MasterController@create_client')->name("create_client");
Route::get('insert_client', 'MasterController@insert_client');
Route::get('view_client', 'MasterController@view_client')->name("create_client");
Route::get('del_client', 'MasterController@del_client');
Route::get('edit_client/{id}', 'MasterController@edit_client')->name("create_client");
Route::post('update_client/{id}', 'MasterController@update_client');
});



Route::group(['middleware' => 'clientsession'], function () {

////////----Client_dashboard
Route::get('client_dashboard', 'ClientController@client_dashboard')->name("client_dashboard");
Route::get('create_branch', 'ClientController@create_branch')->name("create_branch");
Route::get('view_branch', 'ClientController@view_branch')->name("create_branch");
Route::get('insert_branch', 'ClientController@insert_branch')->name("create_branch");
Route::get('delete_branch', 'ClientController@delete_branch')->name("create_branch");
Route::get('edit_branch/{id}', 'ClientController@edit_branch')->name("create_branch");
Route::post('update_branch/{id}', 'ClientController@update_branch')->name("create_branch");

});


Route::group(['middleware' => 'branchsession'], function () {
    Route::get('branch_dashboard', 'BranchController@branch_dashboard')->name("branch_dashboard");
    Route::get('enquiry', 'BranchController@enquiry')->name("enquiry");
});