<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rede extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function lojas(){
        return $this->hasMany(Loja::class, 'rede_id', 'id');
    }
}
