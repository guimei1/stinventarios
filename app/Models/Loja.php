<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $table = 'lojas';

    protected $fillable = [
        'corporate_name',
        'fantasy_name',
        'cpf_cnpj',
        'telephone',
        'email',
        'zip_code',
        'address',
        'address_number',
        'rede_id'
    ];

    public function rede(){
        return $this->belongsTo(Rede::class, 'rede_id', 'id');
    }

    public function inventario(){
        return $this->hasMany(Inventario::class, 'loja_id', 'id');
    }

}
