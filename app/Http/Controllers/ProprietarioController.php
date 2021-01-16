<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
