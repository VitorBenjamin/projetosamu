<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChamados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('fk_idFormulario');
            $table->bigInteger('fk_idResolvedor');
            $table->bigInteger('fk_idFila');
            $table->string('descricao', 60);
            $table->string('prioridade');
            $table->string('statusCham');
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
        Schema::dropIfExists('chamados');
    }
}
