<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];

    // Validar email apenas na Criação de Cliente:
    public static function rules($id = null)
    {
        return [
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
        ];
    }


    // Relacionamento com o modelo Reserva
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
    
}
