<?php

namespace App\Http\Requests\admin\about;

use App\Models\About;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
        return array_merge(About::aboutRules(), [
            'id' => 'required|integer|exists:abouts,id'
        ]);
    }
}
