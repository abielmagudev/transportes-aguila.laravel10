<?php

namespace App\Models;

use App\Models\Features\HasPaisesPredeterminadosTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrigenDestino extends Model
{
    use HasFactory;
    use HasPaisesPredeterminadosTrait;

    protected $fillable = [
        'nombre',
        'rfc',
        'direccion',
        'calle',
        'codigo_postal',
        'numero_exterior',
        'numero_interior', // null
        'pais',
        'estado',
        'ciudad',
    ];
}
