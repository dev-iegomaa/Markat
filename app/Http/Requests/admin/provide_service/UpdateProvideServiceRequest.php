<?php

namespace App\Http\Requests\admin\provide_service;

use App\Models\ProvideService;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProvideServiceRequest extends FormRequest
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
            'id' => 'required|integer|exists:provide_services,id',
            'provide_id' => 'required|integer|exists:provides,id',
            'services_id' => 'required|string|exists:services,service'
        ];
    }
}
