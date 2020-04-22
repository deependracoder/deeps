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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cron', 'PublicController@cron')->name('cron');


Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\LoginController@authenticate')->name('admin.authenticate');
Route::post('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

Auth::routes();
Route::get('/admin', 'Admin\AdminController@index')->name('admin.home');
Route::get('/admin/plan', 'Admin\PackageController@pak_create')->name('admin.plan.create');
Route::post('/admin/plan', 'Admin\PackageController@pak_store')->name('admin.plan.store');

Route::get('/dashboard', 'HomeController@index')->name('user.dashboard');
Route::get('/dashboard/plan/{id}', 'HomeController@buy_plan')->name('user.plan.buy');
Route::post('/dashboard/plan/{id}', 'HomeController@store_plan')->name('user.plan.store');
Route::post('/dashboard/plan_detail', 'HomeController@plan_detail')->name('user.plan.detail');
Route::get('/dashboard/plans', 'HomeController@all_plans')->name('user.view.plans');
Route::get('/dashboard/my_plans', 'HomeController@my_plans')->name('user.runninng.plans');
Route::get('/dashboard/trans', 'HomeController@transactions')->name('user.transactions');
Route::get('/dashboard/withdraw', 'HomeController@withdraw')->name('user.view.withdraw');
Route::post('/dashboard/withdraw', 'HomeController@withdraw_store')->name('user.store.withdraw');








