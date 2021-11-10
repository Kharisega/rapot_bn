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
Route::get('/daftarnilai', function () {
    return view('rapot.kasar.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ! Route khusus Siswa
Route::middleware('role:siswa')->get('siswa/nilai', 'LihatController@index')->name('cek.nilai');
Route::middleware('role:siswa')->get('siswa/nilai/{nilai}', 'LihatController@lihat')->name('lihat.nilai');
Route::middleware('role:siswa')->post('siswa/cari/nilai', 'LihatController@cari')->name('lihat.cari');

// ! Route khusus untuk Guru
Route::middleware('role:guru')->resource('rencana', 'RencanaController');
Route::middleware('role:guru')->get('nilai', 'NilaiController@index')->name('nilai.index');
Route::middleware('role:guru')->get('nilai/{nilai}', 'NilaiController@create')->name('nilai.create');
Route::middleware('role:guru')->get('lihat/{lihat}', 'NilaiController@show')->name('lihat.show');
Route::middleware('role:guru')->get('nilai/{lihat}/edit', 'NilaiController@edit')->name('ubah.edit');
Route::middleware('role:guru')->put('nilaiii', 'NilaiController@update')->name('ubah.update');
Route::middleware('role:guru')->post('nilaii', 'NilaiController@store')->name('nilai.store');
Route::middleware('role:guru')->post('nilai/cari', 'NilaiController@cari')->name('nilai.cari');

Route::middleware('role:guru')->get('rapot', 'RapotController@index')->name('rapot.index');
Route::middleware('role:guru')->post('rapot/daftarnilai', 'RapotController@show')->name('rapot.show');

// ! Route khusus untuk Admin dan Guru
Route::middleware('role:admin')->get('admin/rencana', 'RencanaController@admin')->name('rencana.admin');
Route::group(['middleware' => 'role:admin|guru'], function(){
    Route::post('admin/rencana/cari', 'RencanaController@cari')->name('rencana.cari');
});

// ! Route untuk Admin atau Kepala Sekolah
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

// Route untuk image guru
// Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
// Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
// Route::get('/', function()
// {
//     $image = Image::make('foo.jpg')->resize(300, 200);

//     return $image->response('jpg');
// });