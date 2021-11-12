<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->string('nip');
            $table->string('nama_guru');
            $table->string('email');
            $table->string('jk_guru');
            $table->string('ttl_guru');
            $table->string('telp_guru');
            $table->string('alamat_guru');
            $table->string('foto_guru');
            $table->string('mapel');
            $table->string('kelas');
            $table->string('status');
            $table->string('kelas_bimbingan');
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
        Schema::dropIfExists('guru');
    }
}
