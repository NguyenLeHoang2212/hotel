<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductCategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:255|unique:product_categories,name,'.$this->product,
            'status' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'The name is required',
            'name.min' => 'Name must be more than 3 characters ',
            'name.max' => 'Name must be less  than 255 characters',
            'status.required' => ' Status is required'
        ];
    }
}
