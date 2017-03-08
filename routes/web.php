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

// .. 

Route::get('tnc',array("as"=>"tnc",'uses'=>"PageController@tnc"));

Route::get('download',array("as"=>"download",'uses'=>"PageController@download"));

Route::get('who-is-online',array("as"=>"who_online",'uses'=>"PageController@who_online"));

Route::get('contact',array("as"=>"contact",'uses'=>"PageController@contact"));