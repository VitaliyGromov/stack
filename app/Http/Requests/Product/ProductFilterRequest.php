<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => ['nullable','string'],
            'product_name' => ['nullable', 'string'],
            'quantity' => ['nullable', 'string'],
        ];
    }
}
