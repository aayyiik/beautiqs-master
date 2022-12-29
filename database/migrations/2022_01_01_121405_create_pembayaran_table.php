<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id_bayar');
            $table->unsignedBigInteger('id_terima');
            $table->date('tgl_bayar');
            $table->integer('total_bayar');
            $table->text('bukti');
            $table->timestamps();

            $table->foreign('id_terima')->references('id_terima')->on('penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
