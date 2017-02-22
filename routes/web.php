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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/terms', 'PagesController@terms')->name('terms');

Route::get('/admin-v2', 'AdminController@adminV2');

Route::resource('admin', 'AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index');

















// examples and docs, delete for production

Route::get('/404-example', 'StyleExamplesController@example404')->name('404-example');

Route::get('/500-example', 'StyleExamplesController@example500')->name('500-example');

Route::get('/blank-page', 'StyleExamplesController@blankPage')->name('blank-page');

Route::get('/buttons', 'StyleExamplesController@buttons')->name('buttons');

Route::get('/boxed', 'StyleExamplesController@boxed')->name('boxed');

Route::get('/calendar', 'StyleExamplesController@calendar')->name('calendar');

Route::get('/charts-js', 'StyleExamplesController@chartsJs')->name('charts-js');

Route::get('/collapsed-sidebar', 'StyleExamplesController@collapsedSidebar')->name('collapsed-sidebar');

Route::get('/documentation', 'StyleExamplesController@documentation')->name('documentation');

Route::get('/editors', 'StyleExamplesController@editors')->name('editors');

Route::get('/fixed', 'StyleExamplesController@fixed')->name('fixed');

Route::get('/flot', 'StyleExamplesController@flot')->name('flot');

Route::get('/forms', 'StyleExamplesController@formExamples')->name('forms');

Route::get('/forms-advanced', 'StyleExamplesController@formsAdvanced')->name('forms-advanced');

Route::get('/icons', 'StyleExamplesController@icons')->name('icons');

Route::get('/inline-charts', 'StyleExamplesController@inlineCharts')->name('inline-charts');

Route::get('/invoice', 'StyleExamplesController@invoice')->name('invoice');

Route::get('/lockscreen', 'StyleExamplesController@lockscreen')->name('lockscreen');

Route::get('/login-example', 'StyleExamplesController@loginExample')->name('login-example');

Route::get('/mailbox', 'StyleExamplesController@mailbox')->name('mailbox');

Route::get('/modals', 'StyleExamplesController@modals')->name('modals');

Route::get('/morris', 'StyleExamplesController@morris')->name('morris');

Route::get('/pace-page', 'StyleExamplesController@pacePage')->name('pace-page');

Route::get('/profile-example', 'StyleExamplesController@profileExample')->name('profile-example');

Route::get('/register-example', 'StyleExamplesController@registerExample')->name('register-example');

Route::get('/sliders', 'StyleExamplesController@sliders')->name('sliders');

Route::get('/tables-data', 'StyleExamplesController@tablesData')->name('tables-data');

Route::get('/tables-simple', 'StyleExamplesController@tablesSimple')->name('tables-simple');

Route::get('/timeline', 'StyleExamplesController@timeline')->name('timeline');

Route::get('/top-nav', 'StyleExamplesController@topNav')->name('top-nav');

Route::get('/ui-general', 'StyleExamplesController@uiGeneral')->name('ui-general');

Route::get('/widgets', 'StyleExamplesController@widgets')->name('widgets');


