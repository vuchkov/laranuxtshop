<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\Request;
use Illuminate\Validation\Rule;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true; // Adjust authorization logic if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'sku' => [
                'required',
                'string',
                Rule::unique('products', 'sku'),
            ],
            'description' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'category_id' => 'nullable|integer|exists:categories,id',
        ];
    }
}
