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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/{id}','PagesController@viewcategory')->name('category');
Route::get('/book/{id}','PagesController@viewbook')->name('book');
Route::post('/comment/{id}','PagesController@addcomment')->name('comment')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload', 'UploadController@index')->name('upload');
Route::post('/upload', 'UploadController@upload')->name('upload.save');

Route::group(['prefix'=>'admin','middlewrae'=>'roles','roles'=>'admins'],function(){
              Route::resource('users','AdminUsers');
              Route::resource('categories','AdminCategory');

});
            //  Route::resource('users','AdminUsers');
