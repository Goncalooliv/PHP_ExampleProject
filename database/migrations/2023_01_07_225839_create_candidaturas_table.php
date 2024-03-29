<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCandidato');
            $table->unsignedBigInteger('idCandidato');
            $table->string('emailCandidato');
            $table->unsignedBigInteger('idAnuncio');
            $table->string('file_path')->nullable();
            $table->string('file_name')->nullable();


            $table->foreign('idCandidato')
            ->references('id')
            ->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('idAnuncio'                                                                                                                                                                                                                                                                                                                                 )
            ->references('id')
            ->on('empresas')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidaturas');
    }
}
