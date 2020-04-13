<?php

namespace App\Http\Requests\Bookings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingsRequest extends FormRequest
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

            'parks_gardens_id' => 'required|unique:bookings',
            'service_id' => 'required|unique:bookings',
            'amount_booked' => 'required|unique:bookings',
            'booking_status' => 'required|boolean:bookings',
            'time_booked' => 'required|unique:bookings',
            'duration_booked' => 'required|unique:bookings'
         ];
    }
}
