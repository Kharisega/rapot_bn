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
        Schema::create('data_guru', function (Blueprint $table) {
            $table->string('id_guru');
            $table->string('nip');
            $table->string('nama_guru');
            $table->string('jk_guru');
            $table->string('ttl_guru');
            $table->string('telp_guru');
            $table->string('alamat_guru');
            $table->string('foto_guru');
            $table->string('mapel_ampuan');
            $table->string('kelas_ampuan');
            $table->string('status');
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
        Schema::dropIfExists('data_guru');
    }
}
