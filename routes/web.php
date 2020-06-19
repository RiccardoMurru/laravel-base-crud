<?php

use App\Http\Controllers\JanitorController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('/teachers', 'TeacherController@index')->name('teachers.index');
Route::resource('janitors', 'JanitorController');
