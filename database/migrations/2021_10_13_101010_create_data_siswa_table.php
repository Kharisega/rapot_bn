<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->String('nama_siswa');
            $table->String('nisn');
            $table->String('ttl');
            $table->String('jk');
            $table->String('agama');
            $table->String('status_keluarga');
            $table->String('status_anak');
            $table->String('alamat_siswa');
            $table->String('nomor_telp_siswa');
            $table->String('sekolah_asal');
            $table->String('tanggal_terima');
            $table->String('nama_ayah');
            $table->String('nama_ibu');
            $table->String('alamat_ortu');
            $table->String('nomor_telp_ortu');
            $table->String('pekerjaan_ayah');
            $table->String('pekerjaan_ibu');
            $table->String('nama_wali');
            $table->String('alamat_wali');
            $table->String('nomor_telp_wali');
            $table->String('pekerjaan_wali');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
}
