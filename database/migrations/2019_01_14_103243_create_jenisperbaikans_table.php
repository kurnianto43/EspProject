<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisperbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisperbaikans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_jenis_perbaikan')->unique();
            $table->string('nama_jenis_perbaikan');
            $table->string('keterangan_jenis_perbaikan');
            $table->integer('biaya_jasa');
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
        Schema::dropIfExists('jenisperbaikans');
    }
}
