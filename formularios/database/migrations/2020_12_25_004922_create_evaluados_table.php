<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cedula');
            $table->string('campaña');
            $table->string('ncampaña');
            $table->string('total');
            $table->text('fortaleza_prim');
            $table->text('mejora_prim');
            $table->string('cumple_prim');
            $table->string('no_cumple_prim');
            $table->string('consideración_prim');
            $table->text('fortaleza_seg');
            $table->text('mejora_seg');
            $table->string('cumple_seg');
            $table->string('no_cumple_seg');
            $table->string('consideración_seg'); 
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
        Schema::dropIfExists('evaluados');
    }
}
