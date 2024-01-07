<?php

namespace App\Http\Requests\admin\about;

use Illuminate\Foundation\Http\FormRequest;

class CreateAboutRequest extends FormRequest
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
            'paragraph' => 'required|string',
            'image' => 'required|file|mimes:png,jpg,webp,jpeg'
        ];
    }
}
