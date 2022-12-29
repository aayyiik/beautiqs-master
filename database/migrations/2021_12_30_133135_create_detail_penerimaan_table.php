<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenerimaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penerimaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_terima')->unsigned()->nullable();
            $table->unsignedBigInteger('kode_barang')->unsigned()->nullable();
            $table->integer('harga_his')->nullable();
            $table->integer('jumlah_his')->nullable();
            $table->integer('subtotal')->nullable();
            $table->timestamps();

            $table->foreign('id_terima')->references('id_terima')->on('penerimaan');
            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penerimaan');
    }
}
