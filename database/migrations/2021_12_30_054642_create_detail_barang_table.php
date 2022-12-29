<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_barang')->unsigned()->nullable();
            $table->unsignedBigInteger('id_warna')->unsigned()->nullable();
            $table->unsignedBigInteger('id_ukuran')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->foreign('id_warna')->references('id_warna')->on('warna');
            $table->foreign('id_ukuran')->references('id_ukuran')->on('ukuran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_barang');
    }
}
