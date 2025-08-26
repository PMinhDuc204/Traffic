<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailTrafficLightRequest extends FormRequest
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
            'id' => ['required', 'exists:traffic_lights,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => 'Traffic light ID is required.',
        ];
    }
}
