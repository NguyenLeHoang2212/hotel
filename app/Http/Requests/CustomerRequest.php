<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'   => 'required|string|max:255|unique:customers,name',
            'room_type'     => 'required|string|max:255',

            'arrival_date'  => 'required|date',
            'depature_date' => 'required|date',
            'email'      => 'required|string|max:255',
            'ph_number'  => 'required',
        ];
    }
}