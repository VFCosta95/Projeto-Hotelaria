<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_checkin',
        'data_checkout',
        'quarto_id',
        'cliente_id',
    ];

    // Relacionamento com o modelo Quarto
    public function quarto()
    {
        return $this->belongsTo(Quarto::class);
    }

    // Relacionamento com o modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    
}
