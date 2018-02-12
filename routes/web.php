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

Route::get('/todo', 'RedirController@redirTodo')->name('todo');
Route::get('/restaurant','RedirController@redirRes')->name('restaurant');
Route::get('/dashboard','DashboardController@getIndex')->name('dashboard');

Route::post('/todo', 'TodoListController@store')->name('todo');
Route::post('/restaurant', 'RestaurantController@store')->name('restaurant');
Route::get('/todo', 'TodoListController@displayTasks');
//Route::get('/dashboard', 'TodoListController@displayTasks');
Route::get('/restaurant', 'RestaurantController@display');
Route::get('/dashboard', 'DashboardController@Resdisplay');
Route::delete('/todo/{id}', 'TodoListController@destroy');
Route::delete('/restaurant/{id}', 'RestaurantController@destroy');
