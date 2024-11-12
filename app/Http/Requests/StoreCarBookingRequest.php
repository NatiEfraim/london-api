<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarBookingRequest extends FormRequest
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
            //
            'start_date' => 'required|date|after_or_equal:2019-01-01',
            'start_time' => 'required|date_format:H:i',
            'end_date' => 'required|date|after:start_date',
            'end_time' => 'required|date_format:H:i',
            'drivers' => 'required|integer|min:1|max:5',
            'goal_booking' => 'boolean',
        ];
    }


        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [

        'start_date.required' => 'תאריך ההתחלה הוא שדה חובה.',
        'start_date.date' => 'תאריך ההתחלה חייב להיות תאריך חוקי.',
        'start_date.after_or_equal' => 'תאריך התחלה אינו תקין.',
        'start_time.required' => 'שעת ההתחלה היא שדה חובה.',
        'start_time.date_format' => 'שדה שעת התחלה אינו תקין.',
        'end_date.required' => 'תאריך הסיום הוא שדה חובה.',
        'end_date.date' => 'תאריך הסיום חייב להיות תאריך חוקי.',
        'end_date.after' => 'שדה תאריך סיום אינו תקין.',
        'end_time.required' => 'שעת הסיום היא שדה חובה.',
        'end_time.date_format' => 'שעת סיום אינו תקין.',

        'drivers.required' => 'שדה מספר נוסעים הינו חובה.',
        'drivers.integer' => 'שדה מספר נוסעים אינו תקין.',
        'drivers.min' => 'שדה מספר נוסעים אינו תקין.',
        'drivers.max' => 'שדה מספר נוסעים אינו תקין.',
        'goal_booking.boolean' => 'שדה מרת נסיעה אינו קין.',


        ];
    }

}
