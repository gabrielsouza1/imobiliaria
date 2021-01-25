<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proprietario extends Model
{
   use HasFactory;
   protected $table = 'proprietario';
   public $timestamps = false;
   protected $fillable = ['nome', 'sexo',
'data_nascimento', 'naturidade', 'nacionalidade' , 'foto', 'rua' 'numero', 'complemento', 'bairro', 'cidade',
'estado', 'cep', 'cpf', 'ie', 'cnpj', 'rg', 'rg_emissor', 'email',
'telefone', 'whatsapp',
'observacoes_internas', 'outras_observacoes', 'cadastradoem', 'cadastrapor' , 'alteradoem', 'alteradopor', 'ativo'];
}
