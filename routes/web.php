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

Route::get('/', 'PageController@index');

Route::get('/services/general-support/', 'PageController@general_support');

Route::get('/services/server-support/',  'PageController@server_support');

Route::get('/services/remote-backup/',  'PageController@remote_backup');

Route::get('/services/web-development/',  'PageController@web_development');

Route::get('/services/connectivity/',  'PageController@connectivity');

Route::get('/our-promise',  'PageController@our_promise');

Route::get('/contact-us',  'PageController@contact_us');

Route::get('/support-info',  'PageController@support_info');

Route::get('/terms-and-conditions', 'PageController@terms_and_conditions');

Route::get('/privacy',  'PageController@privacy');

Route::get('/phpinfo', 'PageController@phpinfo');