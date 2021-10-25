<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelRemidial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_remidial', function (Blueprint $table) {
            $table->increments('id_remidial');
            $table->string('id_mapel');
            $table->string('nama_penilaian');
            $table->string('id_siswa');
            $table->date('tanggal_remed');
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
