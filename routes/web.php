<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/

Auth::routes();


// Google Login Routes 
Route::get('/google-login', 'Auth\GoogleAuthController@redirectToProvider');
Route::get('/callback', 'Auth\GoogleAuthController@handleProviderCallback');
Route::post('getimg','Auth\GoogleAuthController@getimg');	
// Admin Route 
Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin', 'middleware'=>['auth','admin']], function () {											
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/user-list', 'DashboardController@userList')->name('user-list');								
    Route::get('/user-status-update/{id}', 'DashboardController@userTypeUpdate')->name('user-status-update');  										
    // Category Route====
    Route::resource('category', 'CategoryController');  										
    Route::resource('book', 'BookController');  										
});											
     
// Author Route 
Route::group(['as'=>'author.','namespace'=>'Author','middleware'=>['auth','author']], function () {	
    Route::get('/','DashboardController@index')->name('home');	
    Route::post('/like','DashboardController@likeStore');	
    Route::get('/edit-profile','DashboardController@editProfile');	
    Route::post('/edit-profile','DashboardController@editProfileUser')->name('edit-profile');		
    Route::post('/edit-profile-img','DashboardController@editProfileImg');				
    Route::get('{name}_{id}','DashboardController@profile');	
    Route::post('/postget','DashboardController@postStatus');		
    Route::get('/book-single/{id}','DashboardController@bookView')->name('bookView');			
    Route::get('/category/book/{id}', 'DashboardController@catBook')->name('category.book');									
});											

											