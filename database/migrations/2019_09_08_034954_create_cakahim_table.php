<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCakahimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cakahim', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namapasangan');
            $table->string('namakahim');
            $table->string('nimkahim');
            $table->string('namawakahim');
            $table->string('nimwakahim');
            $table->string('motto');
            $table->string('img-cakahim')->default('img/profile.svg');
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
        Schema::dropIfExists('cakahim');
    }
}
