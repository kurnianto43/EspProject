<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKulkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kulkas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_asset', 10)->unique();
            $table->string('nomor_seri', 50)->unique();
            $table->integer('tipe_id')->unsigned();
            $table->integer('kondisi_id')->unsigned();
            $table->date('tgl_masuk');
            $table->timestamps();
            $table->foreign('tipe_id')->references('id')->on('tipes');
            $table->foreign('kondisi_id')->references('id')->on('kondisis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kulkas');
    }
}
