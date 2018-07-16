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
// if admin auth
Route::get('/dashboard', [
    'uses'=>'adminController@dashboardController',
    'as'=>'dashboard'
]);

Auth::routes();

// Blogs
Route::get('/blog', 'BlogsController@index');
Route::get('blog/create', 'BlogsController@create');
Route::post('blog/store', 'BlogsController@store');
Route::delete('blog/destroy', 'BlogsController@destroy');
Route::put('blog/update', 'BlogsController@update');
Route::get('blog/show', 'BlogsController@show');
Route::get('blog/edit', 'BlogsController@edit');
// // resources
Route::resource('news','NewsController');
