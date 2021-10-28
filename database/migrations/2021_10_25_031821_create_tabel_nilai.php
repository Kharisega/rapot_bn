<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_nilai', function (Blueprint $table) {
            $table->integer('id_penilaian');
            $table->integer('id_siswa');
            $table->integer('besar_nilai');
            $table->string('ket_nilai');
            $table->integer('id_guru');
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
        Schema::dropIfExists('tabel_nilai');
    }
}
