<?php

namespace App\Models;

use App\Models\Features\HasPaisesPredeterminadosTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    use HasPaisesPredeterminadosTrait;

    protected $fillable = [
        'nombre',
        'rfc',
        'direccion',
        'numero_exterior', // null
        'numero_interior', // null 
        'colonia', // null
        'codigo_postal',
        'pais',
        'estado',
        'ciudad',
        'cuenta_bancaria', // null
        'moneda',
        'regimen_fiscal',
        'retencion',
        'tipo_pago',
        'tasa_iva',
        'cuenta_contable',
    ];

    public function getNombrePaisAttribute()
    {
        return self::getNombrePais($this->pais);
    }
}
