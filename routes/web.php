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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HpController@index');
Route::get('about', 'HpController@about')->name('about_us');
Route::get('service', 'HpController@service')->name('service');
Route::get('access', 'HpController@access')->name('access');
Route::get('kiki', 'HpController@kiki')->name('kiki');
Route::get('denkou', 'HpController@denkou')->name('denkou');
Route::get('fukusi', 'HpController@fukusi')->name('fukusi');
Route::get('syouene', 'HpController@syouene')->name('syouene');
Route::get('hojokin', 'HpController@hojokin')->name('hojokin');
Route::get('shindan', 'HpController@shindan')->name('shindan');
Route::get('question', 'HpController@question')->name('question');
Route::get('syouene', 'HpController@syouene')->name('syouene');
Route::get('contact', 'HpController@contact')->name('contact');
Route::get('blog', 'HpController@blog')->name('blog');
Route::get('map', 'HpController@map')->name('map');
Route::get('mailform', 'HpController@mailform')->name('mailform');