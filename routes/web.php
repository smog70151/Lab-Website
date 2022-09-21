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
  return view('pages.members', ['mode' => 'null']);
});

Route::get('/members/professor', function() {
  return view('pages.members', ['mode' => 'professor']);
});

Route::get('/members/students', function() {
  return view('pages.members', ['mode' => 'students']);
});

Route::get('/research', function() {
  return view('pages.research');
});

Route::get('/courses', function() {
  return view('pages.courses');
});

// 2020-09-05 SecureML Demo
// Route::get('/demo', function() {
//   return view('pages.demo');
// });

// 2022-09-21 Demo Template Update
Route::get('/demo-template', function() {
  return view('pages.demo-template');
});
