<?php

namespace App\Models\Features;

trait HasPaisesPredeterminadosTrait
{
    public static $claves_nombres_paises_predeterminados = [
        'ca' => 'Canadá',
        'us' => 'Estados Unidos de América',
        'mx' => 'México',
    ];

    public static function getPaisesPredeterminados()
    {
        return self::$claves_nombres_paises_predeterminados;
    }

    public static function getClavesPaisesPredeterminados()
    {
        return array_keys(self::$claves_nombres_paises_predeterminados);
    }

    public static function getNombresPaisesPredeterminados()
    {
        return array_values(self::$claves_nombres_paises_predeterminados);
    }
}
