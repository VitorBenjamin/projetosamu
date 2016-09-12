<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEnderecos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->String('cidade');
            $table->integer('estado');
            $table->integer('pais');
            $table->bigInteger('cep');
            $table->string('referencia');
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
        Schema::dropIfExists('enderecos');
    }
}
