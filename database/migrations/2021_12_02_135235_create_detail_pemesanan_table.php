<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pesan')->unsigned()->nullable();
            $table->unsignedBigInteger('kode_barang')->unsigned()->nullable();
            $table->integer('jumlah_up')->nullable();
            $table->integer('harga_up')->nullable();
            $table->timestamps();

            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->foreign('id_pesan')->references('id_pesan')->on('pemesanan');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemesanan');
    }
}
