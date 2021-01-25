<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proprietario;
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

    public function store(StoreUpdatePost $request)
    {
        $data = $request->all();

        if ($request->image->isValid()) {

            $nameFile = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();

            $foto = $request->image->storeAs('proprietario', $nameFile);
            $data['image'] = $foto;
        }

        Post::create($data);

        return redirect()
                ->route('proprietario.index')
                ->with('message', 'Post criado com sucesso');;
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