<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSukucadangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sukucadangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_suku_cadang')->unique();
            $table->string('nama_suku_cadang');
            $table->integer('jumlah_suku_cadang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sukucadangs');
    }
}
