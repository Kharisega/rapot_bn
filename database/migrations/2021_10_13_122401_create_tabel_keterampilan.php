<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelKeterampilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_keterampilan', function (Blueprint $table) {
            $table->increments('id_keterampilan');
            $table->string('id_mapel');
            $table->string('id_siswa');
            $table->string('nama_keterampilan');
            $table->date('tanggal_keterampilan');
            $table->string('keterangan');
            $table->string('id_semester');
            $table->string('id_tahun');
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
        //
    }
}
