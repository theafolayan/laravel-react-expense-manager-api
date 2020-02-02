<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/expenses', 'ExpenseController@index')->name('expenses.all');

Route::post('/expenses', 'ExpenseController@store')->name('expenses.store');

Route::get('/expenses/{expense}', 'ExpenseController@show')->name('expenses.show');

Route::put('/expenses/{expense}', 'ExpenseController@update')->name('expenses.update');

Route::delete('/expenses/{expense}', 'ExpenseController@destroy')->name('expenses.destroy');
