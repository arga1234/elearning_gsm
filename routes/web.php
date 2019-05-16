<?php
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
Route::get('/pendampingan', 'PagesController@pendampingan');
?>