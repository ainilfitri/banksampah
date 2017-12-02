<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatTabungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_tabungans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nasabah');
            $table->integer('id_sampah');
            $table->float('berat');
            $table->float('harga');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_sampah')->references('id')->on('sampahs')->onDelete('CASCADE');
            $table->foreign('id_nasabah')->reference('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_tabungans');
    }
}
