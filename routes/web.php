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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();




Route::group(['prefix'=>'admin', 'as'=>'admin.', 'namespace'=>'admin'],function (){
    Route::get('dashboard','DashboardController@dashboard')->middleware('can:admin')->name('dashboard');
    Route::resource('role', 'RoleController')->middleware('can:admin');
    Route::resource('user', 'UserController')->middleware('can:admin');
    Route::get('service', 'ServiceController@index')->name('service.index')->middleware('can:admin');
    Route::get('service/show/{id}', 'ServiceController@show')->name('service.show')->middleware('can:admin');
    Route::delete('service/destroy/{id}', 'ServiceController@destroy')->name('service.destroy')->middleware('can:admin');
    Route::put('service/approve/{id}', 'ServiceController@approve')->name('service.approve')->middleware('can:admin');
    Route::put('service/unapprove/{id}', 'ServiceController@unapprove')->name('service.unapprove')->middleware('can:admin');
});

Route::group(['prefix'=>'provider', 'as'=>'provider.', 'namespace'=>'provider'],function (){
    Route::resource('service', 'ServiceController')->middleware('can:provider');
    Route::get('comment/{id}/provider', 'CommentController@commentShow')->middleware('can:provider')->name('commentShow');
    Route::get('comment/{id}/replay', 'CommentController@replay')->middleware('can:provider')->name('commentReplay');
    Route::post('comment/{id}/replay', 'CommentController@create')->middleware('can:provider')->name('commentReplay');
    Route::get('dashboard','DashboardController@dashboard')->middleware('can:provider')->name('dashboard');

    Route::post('order','OrderController@confirm')->middleware('can:provider')->name('order');

});

Route::get('/', 'HomeController@index')->name('home');
Route::get('service/details/{id}', 'HomeController@details')->name('service.details');

Route::post('service/comment/store/{id}', 'CommentController@store')->name('comment.store');

