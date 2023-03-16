<?php

namespace Validation\Employee\General;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class UpdateEmployee extends FormRequest
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

    public function messages() {
        $custom_message = [
            
        ];

        return array_merge(default_error_messages(), $custom_message);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'employee_id_num' => "sometimes|unique:employee,employee_id_num, $this->employee_id,employee_id", 
            'employee_lname' => 'required', 
            'employee_work_status_id' => 'required', 
            'employee_shift_id' => 'required',
            'employee_batch' => 'required', 
            'employee_fname' => 'required', 
            'employee_date_hired' => 'required|date'
        ];
    }
}
