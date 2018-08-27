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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('crawler', 'CrawlerController@index');
Route::get('crawler-story','CrawlerController@getStory');
Route::get('crawler-content', 'CrawlerController@getContentChapter');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* authen */
Route::post('/authen', 'UserController@login')->name('authen_post');


Route::prefix('admin')->group(function() {
    Route::get('/users', 'UserController@admin_user_list')->name('admin_user_list')->middleware('auth');
    Route::get('/users/create', 'UserController@admin_create')->name('admin_user_create')->middleware('auth');
    Route::post('/users/store', 'UserController@admin_store')->name('admin_user_store')->middleware('auth');

    Route::get('/stories', 'StoryController@admin_list_story')->name('stories.admin_stories_list')->middleware('auth');
    Route::get('/chapters', 'StoryController@admin_list_chapter')->name('stories.admin_chapters_list')->middleware('auth');
    Route::get('/stories/create', 'StoryController@admin_create')->name('stories.admin_create')->middleware('auth');
    Route::post('/stories/store', 'StoryController@admin_store')->name('stories.admin_store')->middleware('auth');

});
