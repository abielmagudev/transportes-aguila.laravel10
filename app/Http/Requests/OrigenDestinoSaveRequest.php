<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrigenDestinoSaveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => [
                'required'
            ],
            'rfc' => [
                'required'
            ],
            'direccion' => [
                'required'
            ],
            'calle' => [
                'required'
            ],
            'codigo_postal' => [
                'required'
            ],
            'numero_exterior' => [
                'required'
            ],
            'numero_interior' => [
                'nullable'
            ],
            'pais' => [
                'required'
            ],
            'estado' => [
                'required'
            ],
            'ciudad' => [
                'required'
            ],
        ];
    }
}
