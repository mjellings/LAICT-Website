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
    return view('pages.home');
});

Route::get('/services/general-support/', function () {
    return view('pages.services.general');
});

Route::get('/services/server-support/', function () {
    return view('pages.services.server');
});

Route::get('/services/remote-backup/', function () {
    return view('pages.services.remote-backup');
});

Route::get('/services/web-development/', function () {
    return view('pages.services.web-development');
});

Route::get('/services/connectivity/', function () {
    return view('pages.services.connectivity');
});

Route::get('/our-promise', function () {
    return view('pages.our-promise');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/support-info', function () {
    return view('pages.support-info');
});

Route::get('/terms-and-conditions', function () {
    return view('pages.terms-and-conditions');
});