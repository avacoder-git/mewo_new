<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes([

    'register' => false, // Register Routes...

    'reset' => false, // Reset Password Routes...

    'verify' => false, // Email Verification Routes...

]);
Route::get('/', function () {
        session()->flash('open-modal', 'Success');

    return view('home');
});

if(!Auth::check()){
    Route::get('/admin', function (){
       redirect('/login');
    });

}
Route::post('/admin/applications/store', 'ApplicationController@store')->name('applications.store');
Route::get('/uz', function (){
    return view('uz');
});

Route::middleware('auth')->group(function (){

    Route::get('/admin', 'AdminController@index')->name('home')->middleware('role:administrator,owner,manager');
    Route::get('/users', 'UserController@index')->name('users')->middleware('role:administrator,owner');
    Route::get('/users/create', 'UserController@create')->name('users.create')->middleware('role:administrator,owner');
    Route::post('/users/store', 'UserController@store')->name('users.store')->middleware('role:administrator,owner');
    Route::delete('/users/{user}/destroy', 'UserController@destroy')->name('users.destroy')->middleware('role:administrator,owner');
    Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('role:administrator,owner');
    Route::put('/users/{user}/update', 'UserController@update')->name('users.update')->middleware('role:administrator,owner');


//Applications
    Route::get('/admin/applications/', 'ApplicationController@index')->name('applications');
    Route::delete('/admin/applications/deleteall', 'ApplicationController@deleteAll')->name('applications.deleteAll');
    Route::delete('/admin/applications/{application}/destroy', 'ApplicationController@destroy')->name('applications.destroy');



//General informations
    Route::get('/admin/general', 'GeneralController@index')->name('general');
    Route::put('/admin/general/{general}', 'GeneralController@store')->name('generals.store');




// Video Comments
    Route::get('admin/videocomments', 'VideoCommentController@index')->name('video_comments');
    Route::get('admin/videocomments/create', 'VideoCommentController@create')->name('video_comments.create');
    Route::post('admin/videocomments/store', 'VideoCommentController@store')->name('video_comment.store');
    Route::delete('admin/videocomments/{videoComment}/destroy', 'VideoCommentController@destroy')->name('video_comments.destroy');
    Route::get('admin/videocomments/{videoComment}/edit', 'VideoCommentController@edit')->name('video_comments.edit');
    Route::put('admin/videocomments/{videoComment}/update', 'VideoCommentController@update')->name('video_comment.update');


// Videos
    Route::get('admin/videos', 'VideoController@index')->name('videos');
    Route::get('admin/videos/create', 'VideoController@create')->name('videos.create');
    Route::post('admin/videos/store', 'VideoController@store')->name('videos.store');
    Route::delete('admin/videos/{video}/destroy', 'VideoController@destroy')->name('videos.destroy');
    Route::get('admin/videos/{video}/edit', 'VideoController@edit')->name('videos.edit');
    Route::put('admin/videos/{video}/update', 'VideoController@update')->name('videos.update');


//Certificates

    Route::get('admin/certificates', 'CertificateController@index')->name('certificates');
    Route::get('admin/certificates/create', 'CertificateController@create')->name('certificates.create');
    Route::post('admin/certificates/store', 'CertificateController@store')->name('certificates.store');
    Route::delete('admin/certificates/{certificate}/destroy', 'CertificateController@destroy')->name('certificates.destroy');
    Route::get('admin/certificates/{certificate}/edit', 'CertificateController@edit')->name('certificates.edit');
    Route::put('admin/certificates/{certificate}/update', 'CertificateController@update')->name('certificates.update');


//Deseases

    Route::get('admin/deseases', 'DeseaseController@index')->name('deseases');
    Route::get('admin/deseases/{desease}/edit', 'DeseaseController@edit')->name('deseases.edit');
    Route::put('admin/deseases/{desease}/update', 'DeseaseController@update')->name('deseases.update');

//Coworkers

    Route::get('admin/coworkers', 'CoworkerController@index')->name('coworkers');
    Route::get('admin/coworkers/create', 'CoworkerController@create')->name('coworkers.create');
    Route::post('admin/coworkers/store', 'CoworkerController@store')->name('coworkers.store');
    Route::delete('admin/coworkers/{coworker}/destroy', 'CoworkerController@destroy')->name('coworkers.destroy');
    Route::get('admin/coworkers/{coworker}/edit', 'CoworkerController@edit')->name('coworkers.edit');
    Route::put('admin/coworkers/{coworker}/update', 'CoworkerController@update')->name('coworkers.update');

//Reviews
    Route::get('admin/reviews', 'ReviewController@index')->name('reviews');
    Route::get('admin/reviews/create', 'ReviewController@create')->name('reviews.create');
    Route::post('admin/reviews/store', 'ReviewController@store')->name('reviews.store');
    Route::delete('admin/reviews/{review}/destroy', 'ReviewController@destroy')->name('reviews.destroy');
    Route::get('admin/reviews/{review}/edit', 'ReviewController@edit')->name('reviews.edit');
    Route::put('admin/reviews/{review}/update', 'ReviewController@update')->name('reviews.update');



//Properties
    Route::get('admin/properties', 'PropertyController@index')->name('properties');
    Route::get('admin/properties/create', 'PropertyController@create')->name('properties.create');
    Route::post('admin/properties/store', 'PropertyController@store')->name('properties.store');
    Route::delete('admin/properties/{property}/destroy', 'PropertyController@destroy')->name('properties.destroy');
    Route::get('admin/properties/{property}/edit', 'PropertyController@edit')->name('properties.edit');
    Route::put('admin/properties/{property}/update', 'PropertyController@update')->name('properties.update');



    // Excel Export
    Route::get('application/export/', 'ApplicationController@export')->name('excel.export');


});

















