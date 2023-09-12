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
        'numero_exterior',
        'numero_interior',
        'colonia',
        'codigo_postal',
        'pais',
        'estado',
        'ciudad',
        'moneda',
        'regimen_fiscal',
        'retencion',
        'tipo_pago',
        'tasa_iva',
        'cuenta_contable',
    ];
}
