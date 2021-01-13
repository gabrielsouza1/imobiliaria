<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquilino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilino', function (Blueprint $table) {
            $table->id();
            $table->('rendadecial', 10,2);
            $table->string('fiador', 1);
            $table->intereger('id_fiador');
            $table->text('comprovante_renda');
            $table->text('comprovante_imovel');
            $table->string('nome', 255);
            $table->string('sexo', 1);
            $table->date('data_nascimento');
            $table->text('foto_inquilino');
            $table->string('naturalidade', 100);
            $table->string('naciolidade', 100);
            $table->string('rua', 255);
            $table->intereger('numero');
            $table->string('complemento', 100);
            $table->string('bairro', 100);
            $table->string('cidade', 200);
            $table->string('estado', 2);
            $table->string('cep', 8);
            $table->string('cpf', 11);
            $table->string('cnpj', 20);
            $table->string('rg', 20);
            $table->string('rg_emissor', 10);
            $table->string('email', 200);
            $table->string('telefone', 20);
            $table->string('whatsapp', 20);
            $table->text('anexo_documento');
            $table->text('observacoes_internas');
            $table->text('infos_pagamento');
            $table->text('outras_observacoes');
            $table->datetime('cadastroem');
            $table->intereger('cadastradopor');
            $table->datetime('alteradoem');
            $table->intereger('alteradopor');
            $table->string('ativo', 1);
            $table->string('status', 1);
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
        Schema::dropIfExists('inquilino');
    }
}
