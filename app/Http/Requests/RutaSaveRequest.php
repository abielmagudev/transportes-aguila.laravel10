<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RutaSaveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => [
                'required',
            ],
            'kilometros' => [
                'required'
            ],
        ];
    }
}
