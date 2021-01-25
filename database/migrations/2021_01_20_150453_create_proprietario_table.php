<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietario', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('sexo', 1)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('naturalidade', 100)->nullable();
            $table->string('nacionalidade', 100)->nullable();
            $table->text('foto')->nullable();
            $table->string('rua')->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade', 200)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('ie', 45)->nullable();
            $table->string('cnpj', 20)->nullable();
            $table->string('rg', 20)->nullable();
            $table->string('rg_emissor', 10)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->text('anexo_documento')->nullable();
            $table->text('observacoes_internas')->nullable();
            $table->text('outras_observacoes')->nullable();
            $table->text('assinatura')->nullable();
            $table->text('comprovante_residencia')->nullable();
            $table->dateTime('cadastradoem')->nullable();
            $table->integer('cadastradopor')->nullable();
            $table->dateTime('alteradoem')->nullable();
            $table->integer('alteradopor')->nullable();
            $table->string('ativo', 1)->nullable();
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
        Schema::dropIfExists('proprietario');
    }
}
