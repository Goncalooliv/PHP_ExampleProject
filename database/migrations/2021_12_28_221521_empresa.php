<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_empresa');
            $table->string('posicao')->default("Not-Defined");
            $table->string('categoria');
            $table->string('pais');
            $table->string('distrito');
            $table->string('requisitos');
            $table->string('tipo');
            $table->string('contacto');
            $table->unsignedBigInteger('empresas_id');
            $table->boolean('isPremium')->default(false);
            $table->boolean('premium')->default(false);
            $table->string('date')->default(date("d/m/Y"));


            $table->foreign('empresas_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
