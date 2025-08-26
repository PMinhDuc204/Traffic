<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\LightState;

class LightStateRequest extends FormRequest
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
            'traffic_light_id' => ['required', 'exists:traffic_lights,id'],
            'state' => ['required', Rule::in(LightState::getValues())],
            'start_time' => 'required|date_format:Y/m/d H:i:s',
            'end_time' => 'required|date_format:Y/m/d H:i:s',
        ];
    }

    public function messages(): array
    {
        return [
            'intersection_id.required' => 'Intersection ID is required.',
            'traffic_light_id.required' => 'Traffic light ID is required.',
            'state.required' => 'State is required.',
            'start_time.required' => 'Start time is required.',
            'end_time.required' => 'End time is required.',
        ];
    }
}
