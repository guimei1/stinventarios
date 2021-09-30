<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Loja;

class InventarioController extends Controller
{
    public function index(){
        $inventarios = Inventario::all();
        return view('inventario.index');
    }

    public function adicionar(){
        return view('st.inventario.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Inventario::create($req);
        return redirect()->route('st.inventario');
    }

    public function atualizar(){

    }

    public function editar(){

    }

    public function deletar(){

    }

    public function adicionarInventarioLoja($id){
        $dados = ['loja_id' => $id];
        Inventario::create($dados);
        return redirect()->route('st.inventario.lista.loja', $id);
    }

    public function visualizar($id){
        $inventario = Inventario::find($id);
        return view('inventario.visualizar', compact('inventario'));
    }

    public function listaPorLoja($id){
        $inventarios = Inventario::all()->where('loja_id', $id);
        return view('inventario.index', compact('inventarios'));
    }
}
