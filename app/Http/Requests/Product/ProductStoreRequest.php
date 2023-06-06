<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_name' => ['required', 'string', 'max:256'],
            'quantity' => ['nullable', 'integer', 'max:10000'],
        ];
    }

    public function messages(): array
    {
        return [
            'product_name.required' => 'Это поле обязательно для заполнения',
            'product_name.string' => 'Это поле должно быть строкой',
            'product_name.max:256' => 'Название продукта не может превышать 256 символов', 

            'quantity.max:10000' => 'максимально значение 10000',
        ];
    }
}
