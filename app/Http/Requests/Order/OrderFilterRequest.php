<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => ['nullable', 'string'],
            'quantity' => ['nullable', 'string'],
            'price' => ['nullable', 'string'],
            'order_date' => ['nullable', 'string'],
            'product_id' => ['nullable', 'string'],
        ];
    }
}
