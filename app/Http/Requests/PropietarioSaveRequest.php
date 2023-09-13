<?php

namespace App\Http\Requests;

use App\Models\Propietario;
use App\Models\TipoRemolque;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PropietarioSaveRequest extends FormRequest
{
    public $propietario_id;

    public $tipos_remolque_id;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => [
                'required',
                sprintf('unique:%s,nombre,%s', Propietario::class, $this->propietario_id),
            ],
            'tipos_remolque' => [
                'nullable',
                'array',
            ],
            'tipos_remolque.*' => [
                sprintf('exists:%s,id', TipoRemolque::class),
            ],
        ];
    }

    public function messages()
    {
        return [
            'tipos_remolque.array' => __('Selecciona un tipo de remolque de la lista mostrada.'),
            'tipos_remolque.*' => __('Selecciona un tipo de remolque existente'),
        ];
    }

    public function prepareForValidation()
    {
        $this->propietario_id = $this->propietario->id ?? 0;

        $this->merge([
            'tipos_remolque' => isset($this->tipos_remolque) ? $this->tipos_remolque : [],
        ]);
    }

    public function validated($key = null, $default = null)
    {
        // $validated = parent::validated($key, $default);

        return array_merge(parent::validated(), [
            'tipos_remolque_formato_csv' => implode(',', $this->tipos_remolque),
        ]);
    }
}
