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
Route::prefix('blogs')->group(function(){
    Route::get('/', ['uses'=>'HomeController@blogsController','as'=>'blogs']);
    Route::get('/detail/{id}', ['uses'=>'HomeController@blogDetailController','as'=>'blogs'])->name('blog.detail');
});

Route::get('/gallery', [
    'uses'=>'HomeController@galleryController',
    'as'=>'gallery'
]);
Route::get('/store', [
    'uses'=>'HomeController@storeController',
    'as'=>'store'
]);

Auth::routes();
// if admin auth
Route::get('/dashboard', [
    'uses'=>'adminController@dashboardController',
    'as'=>'dashboard'
]);

Route::middleware('auth')->get('/admin', function (Request $request) {
});  
// return $request->user();
Route::group(['prefix' => 'admin'], function () {
    // Blogs
    Route::get('blog/index', 'BlogsController@index');
    Route::get('blog/create', 'BlogsController@create');
    Route::get('blog/edit', 'BlogsController@edit');
    Route::get('blog/show', 'BlogsController@show');
    Route::put('blog/update', 'BlogsController@update');
    Route::post('blog/store', 'BlogsController@store');
    Route::delete('blog/destroy', 'BlogsController@destroy');

    // Eventproject
    Route::get('eventproject/index', 'EventprojectController@index');
    Route::get('eventproject/create', 'EventprojectController@create');
    Route::get('eventproject/edit', 'EventprojectController@edit');
    Route::get('eventproject/show', 'EventprojectController@show');
    Route::put('eventproject/update', 'EventprojectController@update');
    Route::post('eventproject/store', 'EventprojectController@store');
    Route::delete('eventproject/destroy', 'EventprojectController@destroy');
    // resources
    Route::resource('blog','BlogsController');
    Route::resource('eventproject','EventprojectController');
});