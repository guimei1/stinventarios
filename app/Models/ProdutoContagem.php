<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoContagem extends Model
{
    use HasFactory;
    protected $fillable = [
        'lote',
        'cod_barras',
        'estoque',
        'inventario_id',
        'id_arquivo_contagem'
    ];

    public function arquivo(){
        return $this->belongsTo(ArquivoContagem::class, 'id', 'id_arquivo_contagem');
    }
}
