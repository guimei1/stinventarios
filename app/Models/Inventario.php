<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable = [
        'loja_id'
    ];

    public function loja(){
        return $this->belongsTo(Loja::class, 'loja_id', 'id');
    }

    public function arquivo_contagem(){
        return $this->hasOne(ArquivoContagem::class, 'id', 'inventario_id');
    }

    public function arquivo_inventario(){
        return $this->hasOne(ArquivoInventario::class, 'id', 'inventario_id');
    }
}
