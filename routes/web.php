<?php
// namespace App\Http\Controllers\Admin\AdminController;
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
    Route::post('info/edit','UserController@userEditInfo')->middleware('UserRole')->name('userEditInfo');
});
Route::prefix('admin')->group(function(){
    Route::get('/','AdminController@showHomeAdmin')->middleware('AdminRole')->name('homeAdmin');
    
    Route::get('/subject','SubjectAdminController@subjectAdmin')->name('subjectAdmin');
    Route::get('/subject/{subject_id}/detail','SubjectAdminController@subjectDetail')->name('subjectDetail');
    Route::get('/subject/delete/{subject_id}','SubjectAdminController@subjectDelete')->name('subjectDelete');
    Route::post('/subject','SubjectAdminController@subjectEdit')->name('subjectEdit');
    Route::post('/subject/add-new','SubjectAdminController@subjectAdd')->name('subjectAdd');

    Route::get('/user','AdminController@userAdmin')->name('userAdmin');
    // Route::post('/user/add-new','UserAdminController@addUser')->name('addUser');
    Route::get('/user/{user_id}/detail','UserAdminController@userDetail')->name('userDetail');
    Route::get('/user/delete/{user_id}','UserAdminController@deleteUser')->name('deleteUser');

    Route::get('/post','AdminController@postAdmin')->name('postAdmin');
    Route::get('/post/{post_id}/detail','PostAdminController@showPostAdmin')->name('showPostAdmin');
    Route::post('/post/edit','PostAdminController@editPostAdmin')->name('editPostAdmin');
    Route::get('/post/{post_id}/delelte','PostAdminController@postDelete')->name('postDelete');
    

    Route::get('/exam','AdminController@examAdmin')->name('examAdmin');
    Route::get('/question/{question_id}','ExamAdminController@showQuestion')->name('showQuestion');
    Route::post('/question/edit','ExamAdminController@editQuestion')->name('editQuestion');
});

