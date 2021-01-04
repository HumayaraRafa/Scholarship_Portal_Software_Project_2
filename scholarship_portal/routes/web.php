<?php

use Illuminate\Support\Facades\Route;/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>['index']], function(){
	Route::get('/','IndexController@index')->name('index');
	Route::post('/','IndexController@getSearchedScholarship');
	Route::get('/index','indexController@index')->name('portalIndex');
	Route::post('/index','IndexController@getSearchedScholarship');
	Route::get('/aboutus','indexController@aboutus')->name('aboutus');
	Route::post('/aboutus','IndexController@getSearchedScholarship');
	Route::get('/scholarships/{id}','indexController@getScholarship')->name('getScholarship');

	Route::get('/signup-university','indexController@createUniversity')->name('signup-university');
	Route::post('/signup-university','indexController@insertUniversity')->name('insert-university');
	Route::get('/signup-student','indexController@createStudent')->name('signup-student');
	Route::post('/signup-student','indexController@insertaccount')->name('insertaccount');
	Route::get('/createaccount','indexController@createaccount')->name('createaccount');
	Route::get('/searchbyUniName','indexController@getUniversityName')->name('university.universityName');

	
});
Route::post('/feedback','indexController@feedback');
Route::group(['middleware'=>['login']], function(){
	Route::get('/signin','indexController@signin')->name('signin');
	Route::post('/signin','loginController@login')->name('post-signin');
});

Route::group(['middleware'=>['student']], function(){
	//student Controller
	Route::get('/student','studentController@index')->name('student-index');
	Route::post('/student','studentController@getSearchedScholarship')->name('student-getSearchedScholarship');
	Route::get('/student/scholarships/{id}','studentController@getScholarship')->name('getScholarship');
	Route::get('/student/aboutus','studentController@aboutus')->name('student-aboutus');
	Route::get('/student/scholarships/apply/{scholarshipid}','studentController@applyScholarship')->name('student-applyScholarship');
	Route::get('/student/profile','studentController@getProfile')->name('student-getProfile');
	Route::post('/student/profile','studentController@updateProfile')->name('student-updateProfile');
	Route::get('/student/applies','studentController@myApplies')->name('student-myApplies');
	Route::get('/student/change-password','studentController@changePass')->name('student-changePass');
	Route::post('/student/change-password','studentController@postchangePass')->name('student-postchangePass');
});
	//University Controller
Route::group(['middleware'=>['university']], function(){
	Route::get('/university','universityController@index')->name('university-index');
	Route::get('/university/scholarship-{scholarshipid}/students','universityController@getStudents')->name('university.getStudents');
	Route::get('/university/scholarship-{scholarshipid}/students-{studentid}/action','universityController@studentAction')->name('university.studentAction');
	Route::get('/university/new-scholarship','universityController@newScholarship')->name('university.newScholarship');
	Route::post('/university/new-scholarship','universityController@newScholarshipPost')->name('university.newScholarship.Post');
	Route::get('/university/profile','universityController@profile')->name('university.profile');
	Route::post('/university/profile','universityController@updateProfile')->name('university.updateProfile');
	Route::get('/university/scholarship-{scholarshipid}/edit','universityController@scholarshipedit')->name('university.scholarshipedit');
	Route::post('/university/scholarship-{scholarshipid}/edit','universityController@scholarshipeditConfirm')->name('university.scholarshipeditConfirm');
	Route::get('/university/change-password','universityController@changePass')->name('university.changePass');
	Route::post('/university/change-password','universityController@postchangePass')->name('university.postchangePass');

});

	
Route::group(['middleware'=>['admin']], function(){	
	Route::get('/admin','adminController@index')->name('admin-index');
	Route::get('/admin/add-employee','adminController@addEmployee')->name('admin-addEmployee');
	Route::post('/admin/add-employee','adminController@InsertEmployee')->name('admin-InsertEmployee');
	Route::get('/admin/add-student','adminController@addStudent')->name('admin-addStudent');
	Route::get('/admin/add-university','adminController@addUniversity')->name('admin-addUniversity');
	Route::get('admin/employee-list','adminController@getEmpList')->name('admin-getEmpList');
	Route::get('/admin/employee/{adminid}/delete','adminController@adminDelete')->name('admin-adminDelete');
	Route::get('/admin/employee/{adminid}/edit','adminController@adminEdit')->name('admin-adminEdit');
	Route::post('/admin/employee/{adminid}/edit','adminController@adminUpdate')->name('admin-adminUpdate');
	Route::get('/admin/change-OTP','adminController@changeotp')->name('admin-changeotp');
	Route::post('/admin/change-OTP','adminController@updateotp')->name('admin-updateotp');
	Route::get('/admin/scholarship-requests','adminController@scholarshipReq')->name('admin-scholarshipReq');
	Route::get('/admin/scholarship-requests/{scholarshipid}/view','adminController@viewScholarship')->name('admin-viewScholarship');
	Route::get('/admin/scholarship-requests/{scholarshipid}/confirm','adminController@confirmScholarship')->name('admin-confirmScholarship');
	Route::get('/admin/scholarship-requests/{scholarshipid}/recheck','adminController@recheckScholarship')->name('admin-recheckScholarship');
	Route::get('/admin/scholarship-requests/{scholarshipid}/reject','adminController@rejectScholarship')->name('admin-rejectScholarship');
});

Route::get('/feedback/{value}','indexController@setFeedback')->name('setFeedback');




//logout
Route::get('/logout','logoutController@index')->name('logout');
