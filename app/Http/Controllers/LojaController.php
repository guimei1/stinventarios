<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;
use App\Models\Rede;

class LojaController extends Controller{
    public function index(){
        $lojas = Loja::all();
        return view('loja.index',compact('lojas'));
    }

    public function adicionar(){
        $redes = Rede::all();
        return view('loja.adicionar', compact('redes'));
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Loja::create($dados);
        return redirect()->route('st.loja');
    }

    public function editar($id){
        $loja = Loja::find($id);
        return view('loja.editar',compact('loja'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Loja::find($id)->update($dados);
        return redirect()->route('st.loja');
    }

    public function deletar($id){
        Loja::find($id)->delete();
        return redirect()->route('st.loja');
    }
}
