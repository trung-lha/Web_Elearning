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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('users')->group(function() {
    Route::get('/subject/{subject_id}','SubjectController@index')->name('showSubject');
    Route::get('/subject/{subject_id}/exam/{exam_id}','SubjectController@examDetail')->middleware('UserRole')->name('examDetail');
    Route::get('/info','HomeController@showInfo')->middleware('UserRole')->name('showInfo');
    Route::get('/subject/{subject_id}/post','SubjectController@showPost')->name('showPost');
    Route::get('/subject/{subject_id}/post/{post_id}','SubjectController@postDetail')->name('postDetail');
});
Route::prefix('admin')->group(function(){
    Route::get('/','AdminController@showHomeAdmin')->middleware('AdminRole')->name('homeAdmin');
    Route::get('/subject','AdminController@subjectAdmin')->name('subjectAdmin');
    Route::get('/user','AdminController@userAdmin')->name('userAdmin');
    Route::get('/post','AdminController@postAdmin')->name('postAdmin');
    Route::get('/exam','AdminController@examAdmin')->name('examAdmin');
});

