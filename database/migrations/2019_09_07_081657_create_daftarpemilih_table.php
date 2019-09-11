<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarpemilihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarpemilihs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim',10);
            $table->string('nama_pemilih',50);
            $table->string('counter');
            $table->tinyInteger('vote')->default(0);
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
        Schema::dropIfExists('daftarpemilihs');
    }
}
