<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rede;

class RedeController extends Controller
{
    public function index(){
        $redes = Rede::all();
        return view('rede.index', compact('redes'));
    }

    public function adicionar(){
        return view('rede.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Rede::create($dados);
        return redirect()->route('st.rede');
    }

    public function editar($id){
        $rede = Rede::find($id);
        return view('rede.editar', compact('rede'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Rede::find($id)->update($dados);
        return redirect()->route('st.rede');
    }

    public function deletar($id){
        Rede::find($id)->delete();
        return redirect()->route('st.rede');
    }
}
