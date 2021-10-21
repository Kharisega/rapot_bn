<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_tugas', function (Blueprint $table) {
            $table->increments('id_tugas');
            $table->string('id_mapel');
            $table->string('id_siswa');
            $table->string('nama_tugas');
            $table->date('tanggal_tugas');
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
