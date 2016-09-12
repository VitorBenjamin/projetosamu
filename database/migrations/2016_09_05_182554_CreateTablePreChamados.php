<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePreChamados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prechamados', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('fk_idPreFormulario');
            $table->integer('prioridade');
            $table->bigInteger('latitude');
            $table->bigInteger('longitude');
            $table->dateTime('dataIni');
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
        dropIfExists('prechamados');
    }
}
