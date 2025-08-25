<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntersectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'search_name' => 'nullable|string|max:255',
            'search_location' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            //
            'search_name.string' => 'The search name must be a string.',
            'search_name.max' => 'The search name must not be greater than 255 characters.',
            'search_location.string' => 'The search location must be a string.',
            'search_location.max' => 'The search location must not be greater than 255 characters.',
        ];
    }
}
