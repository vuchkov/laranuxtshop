<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sku' => 'required|string|unique:products,sku',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0.01', // Adjust price format as needed
            'category_id' => 'nullable|integer|exists:categories,id', // Add this if you have categories
        ];
    }
}
