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

Route::get('/', function() {
  return view('pages.index');
});

Route::get('/members', function() {
  return view('pages.members');
});

Route::get('/research', function() {
  return view('pages.research');
});

Route::get('/courses', function() {
  return view('pages.courses');
});
