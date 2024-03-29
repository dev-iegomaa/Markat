<?php

namespace App\Http\Requests\admin\setting;

use Illuminate\Foundation\Http\FormRequest;

class CreateSettingRequest extends FormRequest
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
            'title' => 'required|string',
            'email' => 'required|email',
            'logo' => 'required|file|mimes:png,jpg,webp,jpeg',
            'phone' => 'required|string',
            'tracking_apis' => 'required|string'
        ];
    }
}
