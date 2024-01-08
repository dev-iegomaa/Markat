<?php

namespace App\Http\Requests\admin\provide;

use App\Models\Provide;
use Illuminate\Foundation\Http\FormRequest;

class CreateProvideRequest extends FormRequest
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
            'paragraph' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id|unique:provides,category_id',
            'image' => 'required|file|mimes:png,jpg,webp,jpeg'
        ];
    }
}
