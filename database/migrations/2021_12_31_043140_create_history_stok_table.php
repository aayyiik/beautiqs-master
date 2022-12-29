<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryStokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_stok', function (Blueprint $table) {
            $table->bigIncrements('id_his');
            $table->unsignedBigInteger('kode_barang')->unsigned()->nullable();
            $table->date('tgl_his');
            $table->integer('stok_masuk');
            $table->integer('status_stok')->default(1);
            $table->timestamps();

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
        Schema::dropIfExists('history_stok');
    }
}
