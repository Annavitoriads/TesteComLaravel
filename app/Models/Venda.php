<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function itens()
    {
        return $this->hasMany(ItemVenda::class);
    }

    public function parcelas()
    {
        return $this->hasMany(Parcela::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}