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





Route::group( ['namespace'=>'client'], function () {

    Route::get('/','PageController@index');
    Route::get('cat/{id}','PageController@category');
    

});


















Auth::routes();
Route::get('logout','Auth\LoginController@logout');





Route::group(['prefix' => 'admin','namespace'=>'admin','middleware'=>'auth'], function () {


    Route::get('/','PageController@dash');

Route::group(['middleware' => ['can:isAdmin']], function () {
    Route::get('user','UserController@index');
    Route::get('user/create','UserController@create');
    Route::post('user/create','UserController@store');
    Route::get('user/{id}/edit','UserController@edit');
    Route::post('user/{id}/edit','UserController@update');
    Route::get('user/{id}/destroy','UserController@destroy');
    Route::get('role',function(){
        return view('admin.role.show');
    });
});


Route::group(['middleware' => ['can:isAdminOrCon']], function () { 
    Route::get('category','CategoryController@index');
    Route::get('category/create','CategoryController@create');
    Route::post('category/create','CategoryController@store');
    Route::get('category/{id}/edit','CategoryController@edit');
    Route::post('category/{id}/edit','CategoryController@update');
    Route::get('category/{id}/destroy','CategoryController@destroy');
    Route::get('cat/{id}','PageController@index');

    Route::get('project','ProjectController@index');
    Route::get('project/create','ProjectController@create');
    Route::post('project/create','ProjectController@store');
    Route::get('project/{id}/edit','ProjectController@edit');
    Route::post('project/{id}/edit','ProjectController@update');
    Route::get('project/{id}/show','ProjectController@show');
    Route::get('project/{id}/destroy','ProjectController@destroy');
    
    Route::get('service','ServiceController@index');
    Route::get('service/create','ServiceController@create');
    Route::post('service/create','ServiceController@store');
    Route::get('service/{id}/edit','ServiceController@edit');
    Route::post('service/{id}/edit','ServiceController@update');
    Route::get('service/{id}/show','ServiceController@show');
    Route::get('service/{id}/destroy','ServiceController@destroy');


    Route::get('blog','BlogController@index');
    Route::get('blog/create','BlogController@create');
    Route::post('blog/create','BlogController@store');
    Route::get('blog/{id}/edit','BlogController@edit');
    Route::post('blog/{id}/edit','BlogController@update');
    Route::get('blog/{id}/show','BlogController@show');
    Route::get('blog/{id}/destroy','BlogController@destroy');
});
});

