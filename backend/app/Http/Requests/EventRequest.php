<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\EventType;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
            'intersection_id' => 'required|exists:intersections,id',
            'traffic_light_id' => 'required|exists:traffic_lights,id',
            'light_state_id' => 'required|exists:light_states,id',
            'event' => ['required', Rule::in(EventType::getValues())],
            'description' => 'required|string|max:255',
            'event_time' => 'required|date_format:Y/m/d H:i:s',
        ];
    }
}
