<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttributeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'color' => 'required|string',
            'capacity' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ];
    }
}
