<?php

namespace App\Http\Requests\endUser;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string|unique:contacts,phone',
            'email' => 'required|email|unique:contacts,email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }
}
