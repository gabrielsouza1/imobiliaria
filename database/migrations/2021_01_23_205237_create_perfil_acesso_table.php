<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilAcessoTable extends Migration
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
            $table->string('npme_perfil', 45)->nullable();
            $table->text('descricao_Perfil')->nullable();
            $table->datetime('criadoem')->nullable();
            $table->integer('criadopor')->nullable();
            $table->dateTime('alteradoem')->nullable();
            $table->integer('alteradopor')->nullable();
            $table->text('array_Permissoes')->nullable();

            $table->index(["criadopor"], 'fk_criadopor_perfil_acesso_idx');

            $table->index(["alteradopor"], 'fk_alteradopor_perfil_acesso_idx');

            $table->unique(["id"], 'id_UNIQUE');
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
