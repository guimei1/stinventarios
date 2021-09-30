<?php

use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\RedeController;
use App\Models\Inventario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loja', [LojaController::class, 'index'])->name('st.loja');
Route::get('/loja/adicionar', [LojaController::class, 'adicionar'])->name('st.loja.adicionar');
Route::post('/loja/salvar', [LojaController::class, 'salvar'])->name('st.loja.salvar');
Route::get('/loja/editar/{id?}', [LojaController::class, 'editar'])->name('st.loja.editar');
Route::put('/loja/atualizar/{id?}', [LojaController::class, 'atualizar'])->name('st.loja.atualizar');
Route::get('/loja/deletar/{id?}', [LojaController::class, 'deletar'])->name('st.loja.deletar');


Route::get('/rede', [RedeController::class, 'index'])->name('st.rede');
Route::get('/rede/adicionar', [RedeController::class, 'adicionar'])->name('st.rede.adicionar');
Route::post('/rede/salvar', [RedeController::class, 'salvar'])->name('st.rede.salvar');
Route::get('/rede/editar/{id?}', [RedeController::class, 'editar'])->name('st.rede.editar');
Route::put('/rede/atualizar/{id?}', [RedeController::class, 'atualizar'])->name('st.rede.atualizar');
Route::get('/rede/deletar/{id?}', [RedeController::class, 'deletar'])->name('st.rede.deletar');

Route::get('/inventario', [InventarioController::class, 'index'])->name('st.inventario');
Route::get('/inventario/adicionar', [InventarioController::class, 'adicionar'])->name('st.inventario.adicionar');
Route::post('/inventario/salvar', [InventarioController::class, 'salvar'])->name('st.inventario.salvar');
Route::get('/inventario/editar/{id?}', [InventarioController::class, 'editar'])->name('st.inventario.editar');
Route::put('/inventario/atualizar/{id?}', [InventarioController::class, 'atualizar'])->name('st.inventario.atualizar');
Route::get('/inventario/deletar/{id?}', [InventarioController::class, 'deletar'])->name('st.inventario.deletar');
Route::get('/inventario/adicionar/loja/{id?}', [InventarioController::class, 'adicionarInventarioLoja'])->name('st.inventario.adicionar.loja');
Route::get('/inventario/visualizar/{id?}', [InventarioController::class, 'visualizar'])->name('st.inventario.visualizar');
Route::get('/inventario/lista/loja/{id?}', [InventarioController::class, 'listaPorLoja'])->name('st.inventario.lista.loja');
