<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->bigIncrements('id_terima');
            $table->unsignedBigInteger('id_sup');
            $table->unsignedBigInteger('id_user');
            $table->date('tgl_terima');
            $table->integer('total_harga');
            $table->integer('status_terima')->default(1);
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_sup')->references('id_sup')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaan');
    }
}
