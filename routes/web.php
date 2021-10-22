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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('role:admin')->resource('guru', 'GuruController');
Route::middleware('role:admin')->resource('siswa', 'SiswaController');
Route::middleware('role:admin')->resource('mapel', 'MapelController');
Route::middleware('role:admin')->resource('tahun', 'TahunController');
Route::middleware('role:admin')->resource('semester', 'SemesterController');
Route::middleware('role:admin')->get('admin', 'AdminController@index')->name('admin');
Route::middleware('role:admin')->post('admin/tambah', 'AdminController@create')->name('admin.create');
Route::middleware('role:admin')->get('admin/show', 'AdminController@show')->name('admin.show');
Route::middleware('role:admin')->get('admin/edit', 'AdminController@update')->name('admin.update');
Route::middleware('role:admin')->delete('admin/destroy/{id}', 'AdminController@destroy')->name('admin.destroy');