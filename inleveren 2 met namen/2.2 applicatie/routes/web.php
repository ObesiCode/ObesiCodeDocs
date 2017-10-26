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




Route::get('sales','salescontroller@index')->name('sales');
Route::get('sales/{id}','salescontroller@view');
Route::get('sales/{id}/{projectid}','salescontroller@viewproject');
Route::resource('sales','salescontroller');
Route::resource('dev','devcontroller');
Route::post('sales/update','salescontroller@updateuser');
Route::post('/sales/pru','devcontroller@updatedev');
Route::get('/bug','devcontroller@fakertest');

Route::post('/search/sales','salescontroller@search');


Route::get('development','devcontroller@index');
Route::get('development/{projectid}','devcontroller@viewproject');
Route::post('/dev/pru','devcontroller@updatedev');

Route::post('/search/development','devcontroller@search');

Route::get('finance','financecontroller@index')->name('finance');
Route::post('finance','financecontroller@log');
Route::post('finance/store','financecontroller@store');
Route::get('finance/store','financecontroller@store');
Route::post('/finance/search','financecontroller@search');
Route::post('finance/storee','financecontroller@storee');
Route::post('finance/project','financecontroller@project');
Route::get('finance/invoice-edit/{id}','financecontroller@editinvoice');
Route::post('finance/invoiceupdate','financecontroller@updateinvoice');


Route::post('finance/addinvoice','financecontroller@invoicestore');

Route::get('admin/cst/{id}','admin@changeuser');
Route::get('admin/pr/{id}','admin@changeproject');
Route::get('admin','admin@index')->name('admin');
Route::post('admin/userupdate','admin@updateuseradmin');
Route::post('admin/updateproject','admin@updateproject');
Route::post('admin/updateinvoicestatus','admin@setactiveinvoice');

Route::get('loginuser','loginuser@loginuserstuf');
Route::post('log','logcontroller@inputlog');

Route::get('/search/admin/customer','admin@search');
Route::get('/admin/negative','admin@negativeindex');


Route::get('development','devcontroller@index');
Route::get('/', function () {
    return view('auth/login');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
 // op sexy??
