<?php

namespace App\Http\Requests\ParkBookings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParkBookingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           

            'park_name' => 'required:park_bookings',
            'guest_number' => 'required:park_bookings',
            'event_type' => 'required:park_bookings'
        ];
    }
}