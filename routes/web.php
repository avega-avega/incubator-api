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

Route::get('/api/students', 'StudentsController@index')->name('students.list');

Route::get('/api/student/{studentId}', 'StudentsController@info')->name('students.info');

Route::get('/api/students/specialty/{specialtyId}', 'StudentsController@findBySpecialty')->name('students.specialty');

Route::get('/api/students/status/{isActive}', 'StudentsController@findByStatus')->name('students.status');
