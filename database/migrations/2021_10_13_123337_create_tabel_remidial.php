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
            $table->string('id_mapel');
            $table->string('nama_tugas');
            $table->date('tanggal_remded');
            $table->string('keterangan');
            $table->string('id_semester');
            $table->string('id_tahun_ajaran');
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
