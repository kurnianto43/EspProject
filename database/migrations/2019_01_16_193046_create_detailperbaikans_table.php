<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailperbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailperbaikans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('perbaikan_id')->unsigned();
            $table->integer('sukucadang_id')->unsigned();
            $table->integer('qty');
            $table->integer('jenismasalah_id')->unsigned();
            $table->timestamps();
            $table->foreign('perbaikan_id')->references('id')->on('perbaikans');
            $table->foreign('sukucadang_id')->references('id')->on('sukucadangs');
            $table->foreign('jenismasalah_id')->references('id')->on('jenismasalahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailperbaikans');
    }
}
