<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendancecorrectionRequest extends FormRequest
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
            'start_time' => ['date_format:H:i','before:end_time'],
            'end_time' => ['date_format:H:i'],
            'break_take' => ['date_format:H:i','before:end_time'],
            'break_return' => ['date_format:H:i','before:end_time'],
            'remarks' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'start_time.before:end_time' => '出勤時間もしくは退勤時間が不適切な値です',
            'break_take.before:end_time' => '休憩時間が不適切な値です',
            'break_return.before:end_time' => '出勤時間もしくは退勤時間が不適切な値です',
            'remarks.required' => '備考を記入してください',
        ];
    }

}
