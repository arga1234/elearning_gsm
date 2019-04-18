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

Route::get('/', 'PagesController@index');
Route::get('/elearning', 'PagesController@elearning');
Route::get('/berita', 'PagesController@berita');
Route::get('/persebaran', 'PagesController@persebaran');
Route::get('/detailuser', 'PagesController@detailuser');
Route::get('/editprofile', 'PagesController@editprofile');
Route::get('/uploadperubahan', 'PagesController@uploadperubahan');
Route::get('/perubahangurulain', 'PagesController@perubahangurulain');
Route::get('/materibasic', 'PagesController@materibasic');
Route::get('/materiadvanced', 'PagesController@materiadvanced');
Route::get('/detailmateri', 'PagesController@detailmateri');
Route::get('/login', 'PagesController@login');
Route::get('/daftar', 'PagesController@register');
Route::get('/resetpassword', 'PagesController@resetpassword');