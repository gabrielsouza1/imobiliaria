<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('email')->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('nome_usuario', 45)->nullable();
            $table->string('senha', 45)->nullable();
            $table->dateTime('ultimo_acesso')->nullable();
            $table->integer('Id_Perfil')->nullable();
            $table->text('permissoes_exclusivas')->nullable();
            $table->integer('criadopor')->nullable();
            $table->dateTime('criadoem')->nullable();
            $table->integer('alteradopor')->nullable();
            $table->dateTime('alteradoem')->nullable();
            $table->string('ativo', 1);

            $table->index(["id_perfil"], 'fk_perfil_usuarios_idx');

            $table->index(["alteradopor"], 'fk_alteradopor_usuarios_idx');

            $table->index(["criadopor"], 'fk_criadopor_usuarios_idx');

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
        Schema::dropIfExists('usuarios');
    }
}
