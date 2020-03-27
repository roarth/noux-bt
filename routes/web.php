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

Route::get('/', ['uses' => 'HomepageController@index'])->name('homepage');
Route::get('/admin', ['uses' => 'AdminController@index'])->name('admin');

Route::post('admin/contestant', ['uses' => 'ContestantController@store'])->name('createContestant');
