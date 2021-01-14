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

Route::get('/', [
	'uses' =>'TasksController@getTask',
	'as' => 'layoutsIndex'
]);

Route::post('/actions/add', [
	'uses' =>'TasksController@postCreateTask',
	'as' => 'actionsAdd'
]);

Route::get('/actions/delete/{id}',[
  'uses' => 'TasksController@deleteTask',
  'as' => 'actionsDelete'
]);

Route::get('/actions/edit/{id}', [
  'uses' => 'TasksController@getEditTask',
  'as' => 'actionsEdit'
]);

Route::post('/actions/edit', [
  'uses' => 'TasksController@postEditTask',
  'as' => 'actionsEdit'
]);

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
