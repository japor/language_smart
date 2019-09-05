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

Route::get('admin/login', 'LoginController@showAdminLoginForm');
Route::post('admin/login', 'LoginController@showAdminLoginForm');

Route::get('student/login', 'LoginController@showStudentLoginForm');
Route::post('student/login', 'LoginController@showStudentLoginForm');

Route::get('teacher/login', 'LoginController@showTeacherLoginForm');
Route::post('teacher/login', 'LoginController@showTeacherLoginForm');