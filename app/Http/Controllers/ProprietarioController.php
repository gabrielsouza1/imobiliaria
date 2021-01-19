<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proprietario;
class ProprietarioController extends Controller
{
    public function index()
    {
        return view( 'proprietario.index');
    }

    //redicionamento para paginação create

    public function create()
    {
        return view('proprietario.create');
    }
    public function insert(Request $request){
              $proprietario = new proprietario();
              $proprietario ->nome = $request->nome;
              $proprietario -> email = $request->email;
              $proprietario -> endereco = $request->endereco;
              $proprietario ->complemento = $request->complemento;
              $proprietario ->bairro = $request->bairro;
              $proprietario ->cidade = $request->cidade;
              $proprietario ->telefone = $request->telefone;
              $proprietario ->whatsapp = $request->whatsapp;
              $proprietario ->cpf = $request->cpf;
              $proprietario ->cnpj = $request->cnpj;
              $proprietario ->rg = $request->rg;
              $proprietario ->data_nascimento = $request->data_nascimento;

              $proprietario = propritario::where(' cpf', '=',$request->cpf)->orwhere('email', '=', $request->email)->count();
              if($proprietario > 0){
                  echo "<script language='javascript'> window.alert('Proprietario já Cadastrado!') </script>";
                  return view('proprietario.index');
              }
              $tabela = save();
              return redirect()->route('proprietario.index');
            } 
    public function edit()
    {
        return view('proprietario.edit');
    }
    public function modal()
    {
        return view('proprietario.modal');
    }
    public function search()
    {
        return view('proprietario.search');
    }
    public function relatorio()
    {
        return view('proprietario.relatorio');
    }
}