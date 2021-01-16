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
                    $table->decimal ('renda', 10, 2);
                    $table->string('fiador', 1)->comment('Sim (S) / Nao (N)');
                    $table->text('comprovante_renda');
                    $table->text('comprovante_imovel');
                    $table->string('nome');
                    $table->string('sexo', 1);
                    $table->date('data_nascimento');
                    $table->text('foto_inquilino');
                    $table->string('naturalidade', 100);
                    $table->string('naciolidade', 100);
                    $table->string('rua', 100);
                    $table->string('complemento', 100);
                    $table->string('bairro', 100);
                    $table->string('cidade', 200);
                    $table->string('estado', 2);
                    $table->string('cep', 8);
                    $table->string('cpf', 11);
                    $table->string('cnpj', 20);
                    $table->string('rg', 10);
                    $table->string('rg_emissor', 10);
                    $table->string('email', 200);
                    $table->string('telefone', 20);
                    $table->string('whatsapp', 20);
                    $table->string('anexo_documento');
                    $table->string('outras_observacoes');

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
