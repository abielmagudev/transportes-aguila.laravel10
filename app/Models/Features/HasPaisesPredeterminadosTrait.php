<?php

namespace App\Models\Features;

trait HasPaisesPredeterminadosTrait
{
    public static function getPaisesPredeterminados()
    {
        return config('aplicacion.paises_predeterminados');
    }

    public static function getClavesPaisesPredeterminados()
    {
        return array_keys( self::getPaisesPredeterminados() );
    }

    public static function getNombresPaisesPredeterminados()
    {
        return array_values( self::getPaisesPredeterminados() );
    }
}
