<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('kode_barang');
            $table->integer('id_jb')->unsigned();
            $table->string('nama_barang');
            $table->integer('stok')->nullable();
            $table->integer('harga_beli_barang');
            $table->integer('harga_jual_barang');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_jb')->references('id_jb')->on('jenis_barang')->onDelete('cascade')->onUpdate('cascade');
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
