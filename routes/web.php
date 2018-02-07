<?php
use App\data_todo;
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

Route::get('/movie', 'RedirController@redirMovie')->name('movie');
Route::get('/todo', 'RedirController@redirTodo')->name('todo');
Route::get('/dashboard','DashboardController@getIndex')->name('dashboard');

Route::post('/todo', 'TodoListController@store')->name('todo');
Route::get('/todo', 'TodoListController@displayTasks');
Route::delete('/todo/{id}', 'TodoListController@destroy');
