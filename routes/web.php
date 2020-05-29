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

 Route::view('/addemployee','addemployee');
// Route::view('/showemployee','showemployee');
// Route::view('/editemployee','editemployee');
// Route::view('/customers','customers');
// Route::resource('/showemployee','employeecontroller');
Route::resource('employee','EmployeeController');
Route::resource('attendance','AttendanceController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
