<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoInventario extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_interno',
        'cod_barras',
        'descricao',
        'valor_fabrica',
        'valor_consumidor',
        'estoque',
        'secao',
        'id_arquivo_inventario'
    ];

    public function arquivo(){
        return $this->belongsTo(ArquivoInventario::class, 'id', 'id_arquivo_inventario');
    }
}
