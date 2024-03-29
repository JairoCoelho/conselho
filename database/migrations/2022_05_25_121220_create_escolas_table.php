<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_escola');
            $table->string('cnpj');
            $table->string('email');
            $table->string('etapas');
            $table->string('situacao');
            $table->string('ato');
            $table->string('credenciamento');
            $table->string('vigencia_credenciamento');
            $table->string('autorizacao');
            $table->string('vigencia_autorizacao');
                           
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
}
