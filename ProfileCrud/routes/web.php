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

Route::get('/', function () {
    return view('welcome');
});
Route::get('connection','App\Http\Controllers\Connection@connection');
Route::get('getinputPage','App\Http\Controllers\StudentProfile@inputPage');
Route::post('saveData','App\Http\Controllers\StudentProfile@saveStudentInfo');
Route::get('getData','App\Http\Controllers\StudentProfile@getDataInfo');
Route::get('edit/{id}','App\Http\Controllers\StudentProfile@DataEdit');
Route::post('/edit','App\Http\Controllers\StudentProfile@Dataupdate');
Route::get('delete/{id}','App\Http\Controllers\StudentProfile@studelete');