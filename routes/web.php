<?php

// Homepage
Route::get('/', [
    'uses'=>'HomeController@homepageController',
    'as'=>'homepage'
]);
Route::get('/profile', [
    'uses'=>'HomeController@profileController',
    'as'=>'profile'
]);
Route::get('/our-team', [
    'uses'=>'HomeController@ourteamController',
    'as'=>'our-team'
]);
Route::get('/project-event', [
    'uses'=>'HomeController@projecteventController',
    'as'=>'project-event'
]);
Route::get('/blog', [
    'uses'=>'HomeController@blogsController',
    'as'=>'blogs'
]);
Route::get('/gallery', [
    'uses'=>'HomeController@galleryController',
    'as'=>'gallery'
]);
Route::get('/store', [
    'uses'=>'HomeController@storeController',
    'as'=>'store'
]);

Auth::routes();