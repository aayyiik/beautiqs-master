<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->bigIncrements('id_pesan');
            $table->unsignedBigInteger('id_user')->unsigned();
            $table->unsignedBigInteger('id_sup')->unsigned();
            $table->date('tgl_pesan');
            $table->integer('status_pesan')->default(1);
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('pemesanan');
    }
}

