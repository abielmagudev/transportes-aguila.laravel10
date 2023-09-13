<?php

namespace App\Http\Requests;

use App\Models\Cliente;
use Illuminate\Foundation\Http\FormRequest;

class ClienteSaveRequest extends FormRequest
{
    public $cliente_id;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => [
                'required',
                sprintf('unique:%s,nombre,%s,id', Cliente::class, $this->cliente_id)
            ],
            'rfc' => [
                'required',
                sprintf('unique:%s,rfc,%s,id', Cliente::class, $this->cliente_id)
            ],
            'direccion' => [
                'required',
            ],
            'numero_exterior' => [
                'nullable',
            ],
            'numero_interior' => [
                'nullable',
            ],
            'colonia' => [
                'nullable',
            ],
            'codigo_postal' => [
                'required',
            ],
            'pais' => [
                'required',
            ],
            'estado' => [
                'required',
            ],
            'ciudad' => [
                'required',
            ],
            'cuenta_bancaria' => [
                'nullable',
            ],
            'moneda' => [
                'required',
            ],
            'regimen_fiscal' => [
                'required',
            ],
            'retencion' => [
                'required',
            ],
            'tipo_pago' => [
                'required',
            ],
            'tasa_iva' => [
                'required',
            ],
            'cuenta_contable' => [
                'required',
            ],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'retencion' => (int) $this->filled('retencion'),
        ]);

        $this->cliente_id = $this->route('cliente')->id ?? 0;
    }
}
