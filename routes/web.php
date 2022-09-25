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
    return redirect()->route('job.list');
});

// Route for job page
Route::get('/job/list', 'JobController@list')->name('job.list');
Route::post('/job/load', 'JobController@load')->name('job.load');
Route::get('/job/{id}/description', 'JobController@description')->name('job.description');
Route::get('/job/{id}/form', 'JobController@form')->name('job.form');
Route::post('/job/{id}/apply', 'JobController@apply')->name('job.apply');
