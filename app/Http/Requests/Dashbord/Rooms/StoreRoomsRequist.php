<?php

namespace App\Http\Requests\Dashbord\Rooms;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomsRequist extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'room_number'=>"required|numeric",
            'room_type'=>  "required|string",
            'room_cost'=>  "required|numeric",
            'room_availability'=> "required|numeric",
        ];
    }
}
