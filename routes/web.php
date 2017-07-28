<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/charts', function () {
    return view('mcharts');
});

Route::get('/tables', function () {
    return view('table');
});

Route::get('/forms', function () {
    return view('form');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/icons', function () {
    return view('icons');
});

Route::get('/panels', function () {
    return view('panel');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/documentation', function () {
    return view('documentation');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ajax', function (){
    return ['PHP', 'Laravel', 'Ajax'];
});

Route::get('/broadcasting', 'TestController@broadcasting')->name('broadcasting');

/**
 * Test Controller, Only run at the develop environment
 */
if (app()->environment('local')) {
    Route::get('/test', 'TestController@index');
}
