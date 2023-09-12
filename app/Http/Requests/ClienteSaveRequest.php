<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => [
                'required',
            ],
            'rfc' => [
                'required',
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

    public function messages(): array
    {
        return [
            'nombre.required' => __('Nombre es requerido'),
            'rfc.required' => __('RFC es requerido'),
            'direccion.required' => __('Dirección es requerido'),
            'numero_exterior',
            'numero_interior',
            'colonia',
            'codigo_postal' => __('Código postal es requerido'),
            'pais' => __('País es requerido'),
            'estado' => __('Estado es requerido'),
            'ciudad' => __('Ciudad es requerido'),
            'moneda' => __('Moneda es requerido'),
            'regimen_fiscal' => __('Régimen fiscal es requerido'),
            'retencion' => __('Retención es requerido'),
            'tipo_pago' => __('Tipo de pago es requerido'),
            'tasa_iva' => __('Tasa de IVA es requerido'),
            'cuenta_contable' => __('Cuenta contable es requerido'),
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'retencion' => (int) $this->filled('retencion'),
        ]);
    }
}
