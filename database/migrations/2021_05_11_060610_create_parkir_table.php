<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkir', function (Blueprint $table) {
            $table->increments('nomor_tiket');
            $table->foreignId('location_id');
            $table->string('nomor_polisi');
            $table->string('jenis_kendaraan');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
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
        Schema::dropIfExists('parkir');
    }
}
