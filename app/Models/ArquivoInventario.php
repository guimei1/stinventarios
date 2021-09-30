<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArquivoInventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_arquivo',
        'extensao',
        'quantidade_linhas',
        'cod_interno_inicio',
        'cod_interno_fim',
        'cod_barras_inicio',
        'cod_barras_fim',
        'descricao_inicio',
        'descricao_fim',
        'valor_fabrica_inicio',
        'valor_fabrica_fim',
        'valor_consumidor_inicio',
        'valor_consumidor_fim',
        'estoque_inicio',
        'estoque_fim',
        'secao_inicio',
        'secao_fim',
        'inventario_id'
    ];

    public function inventario(){
        return $this->belongsTo(Inventario::class, 'id', 'inventario_id');
    }

    public function produtos(){
        return $this->hasMany(ProdutoInventario::class, 'id_arquivo_inventario', 'id');
    }
}
