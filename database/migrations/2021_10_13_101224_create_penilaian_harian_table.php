<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_harian', function (Blueprint $table) {
            $table->string('id_mapel');
            $table->string('id_semester');
            $table->string('id_tahun_ajaran');
            $table->string('nama_penilaian');
            $table->string('tanggal_penilaian');
            $table->string('keterangan');
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
        Schema::dropIfExists('penilaian_harian');
    }
}
