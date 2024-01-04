<?php

namespace App\Http\Requests\admin\user;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'id' => 'required|integer|exists:users,id',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . request('id'),
            'password' => 'required|string',
        ];
    }
}
