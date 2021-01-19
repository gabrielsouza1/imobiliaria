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
    public function insert(){
        $request->validate([
            'nome'=>'required',
            'email'=>'required|email',
            'endereco'=>'required',
            'complemento'=>'required',
            'bairro'=>'required',
            'cidade'=>'required',
            'telefone'=>'required',
            'whatsapp'=>'required',
            'cpf'=>'required',
            'cnpj'=>'required',
            'rg'=>'required',
            'data_nascimento'=>'required'
        ]);
        $query = DB::table('proprietario')->insert([
            'nome'->$request->input('nome'),
            'email'->$request->input('email'),
            'endereco'->$request->input('endereco'),
            'bairro'->$request->input('bairro'),
            'telefone'->$request->input('telefone'),
            'whatsapp'->$request->input('whatsapp'),
            'cpf'->$request->input('cpf'),
            'cnpj'->$request->input('cnpj'),
            'rg'->$request->input('rg'),
            'data_nascimento'->$request->input('data_nascimento')
        ]);
        if($query){
            return back()->with('Sucesso', 'Proprietario cadastrado com sucesso');
        }else{
            return back()->with('fail');
        }
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