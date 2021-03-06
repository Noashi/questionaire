<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
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
            'fullname' => 'required|max:200',
            'gender' => 'required|numeric|between:1,2',
            'age_sort' => 'required|numeric|between:1,6',
            'is_sent_email' => '',
            'email' => 'required|email',
            'feedback' => 'max:200',
        ];
    }
}
