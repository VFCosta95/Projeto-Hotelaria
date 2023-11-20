<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'numero',
        'capacidade',
        'preco_diaria',
        'disponivel'
    ];
    
    public function getDisponivelAttribute($value)
    {
        return $value ? 'Sim' : 'Não';
    }

    // Relacionamento com o modelo Reserva
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
