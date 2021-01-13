<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilAcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_acesso', function (Blueprint $table) {
            $table->id();
            $table->string('nome_perfil', 45);
            $table->text('descricao_perfil');
            $table->datetime('criadoem');
            $table->integer('criadopor');
            $table->datetime('alteradopor');
            $table->text('array_permissoes');
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
        Schema::dropIfExists('perfil_acesso');
    }
}
