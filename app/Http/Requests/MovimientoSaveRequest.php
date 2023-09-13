<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovimientoSaveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numero_remolque' => [
                'required'
            ],
            'placas_remolque' => [
                'required'
            ],
            'propietario_remolque' => [
                'required'
            ],
            'cantidad_dias_patio' => [
                'required'
            ],
            'observaciones' => [
                'nullable'
            ],
            'cerrado_extranjero' => [
                'required'
            ],
            'cruce_directo' => [
                'required'
            ],
            'id_tipo_remolque' => [
                'required'
            ],
            'id_linea_americana' => [
                'required'
            ],
            'id_cerca_decagps_origen' => [
                'required'
            ],
            'id_cerca_decagps_destino' => [
                'required'
            ],
            'fecha' => [
                'required'
            ],
            'hora' => [
                'required'
            ],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'cerrado_extranjero' => $this->cerrado_extranjero ? 1 : 0,
            'cruce_directo' => $this->cruce_directo ? 1 : 0,
            'id_tipo_remolque' => $this->tipo_remolque,
            'id_linea_americana' => $this->linea_americana,
            'id_cerca_decagps_origen' => $this->cerca_decagps_origen,
            'id_cerca_decagps_destino' => $this->cerca_decagps_destino,
        ]);
    }
}
