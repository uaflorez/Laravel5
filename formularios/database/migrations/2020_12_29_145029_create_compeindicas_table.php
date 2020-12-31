<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompeindicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compeindicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compe_id');
            $table->foreign('compe_id')->references('id')->on('competencias');
            $table->unsignedBigInteger('indica_id');
            $table->foreign('indica_id')->references('id')->on('indicators');
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
        Schema::dropIfExists('compeindicas');
    }
}
