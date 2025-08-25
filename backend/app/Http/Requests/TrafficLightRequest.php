<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrafficLightRequest extends FormRequest
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
            'intersection_id' => ['required', 'exists:intersections,id'],
            'direction' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'intersection_id.required' => 'The intersection id is required.',
            'intersection_id.exists' => 'The intersection id does not exist.',
            'direction.required' => 'The direction is required.',
            'direction.string' => 'The direction must be a string.',
            'direction.max' => 'The direction must not be greater than 255 characters.',
        ];
    }
}
