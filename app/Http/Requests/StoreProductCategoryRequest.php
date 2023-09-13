<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductCategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:255|unique:product_categories,name',
            'status' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên bắt buộc phải nhập vô dùm cái',
            'name.min' => 'Nhập ít hơn 3 chữ r ',
            'name.max' => 'Nhập nhìu hơn 255 chữ r',
            'status.required' => 'Trạng thái đâu'
        ];
    }

}