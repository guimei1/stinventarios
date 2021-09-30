<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArquivoContagem extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_arquivo',
        'extensao',
        'quantidade_linhas',
        'lote_inicio',
        'lote_fim',
        'cod_barras_inicio',
        'cod_barras_fim',
        'estoque_inicio',
        'estoque_fim',
        'inventario_id'
    ];

    public function inventario(){
        return $this->belongsTo(Inventario::class, 'id', 'inventario_id');
    }

    public function produtos(){
        return $this->hasMany(ProdutoContagem::class, 'id_arquivo_contagem', 'id');
    }
}
