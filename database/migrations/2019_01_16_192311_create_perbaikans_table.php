<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbaikans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_perbaikan');
            $table->integer('teknisi_id')->unsigned();
            $table->integer('jenisperbaikan_id')->unsigned();
            $table->integer('kulkas_id')->unsigned();
            $table->date('tanggal_perbaikan');
            $table->timestamps();
            $table->foreign('teknisi_id')->references('id')->on('teknisis');
            $table->foreign('jenisperbaikan_id')->references('id')->on('jenisperbaikans');
            $table->foreign('kulkas_id')->references('id')->on('kulkas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perbaikans');
    }
}
