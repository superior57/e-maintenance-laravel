<?php

Route::resource('posts', 'PostController');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::post('/ajax_form', 'FormeditController@ajax_form');
Route::get('/details_data', ['as' => 'details_data', 'uses' => 'ChartController@index']);
Route::post('/details_data', ['as' => 'details_data', 'uses' => 'ChartController@index']);
// Route::post('form-submit', '');
Route::get('/chart', 'ChartController@index');
Route::get('/pcview', 'PclistController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formedit', 'FormeditController@index');
Route::get('/maintenance', 'MaintenanceController@index');
Route::get('/users', 'UsersController@index');
Route::get('ajaxDelete', 'UsersController@ajax_delete');
Route::post('ajaxDelete', 'UsersController@ajax_delete');
Route::get('ajaxGet', 'UsersController@ajax_get_users');
Route::post('ajaxSave', 'UsersController@ajax_save');
Route::post('ajaxUpdate', 'UsersController@ajax_update');
Route::post('ajax_get_user', 'UsersController@ajax_get_user');
Route::post('ajax_get_pclist', 'PclistController@ajax_get_pclist');
Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'ProductController@htmltopdfview'));