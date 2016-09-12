<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFormularioChamados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulariochamados', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('fk_idEnderecoFormulario');
            $table->string('nome');
            $table->string('sobrenome');
            $table->String('pontoReferencia');
            $table->integer('respPergunta1');
            $table->integer('respPergunta2');
            $table->integer('respPergunta3');
            $table->integer('respPergunta4');
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
        Schema::drioIfExists('formulariochamados');
    }
}
