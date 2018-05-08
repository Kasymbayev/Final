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
    return view('pages.index');
});

Route::get('/','PageController@index')->name('index');

Route::get('/personals','PageController@personals')->name('personals');

Route::get('/personals/{emp_no}/{slug}','EmployeesController@showEmployee')->where('id','\d+')->name('employee.show');





