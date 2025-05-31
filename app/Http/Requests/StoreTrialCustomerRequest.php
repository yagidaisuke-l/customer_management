<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrialCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'              => ['required', 'string', 'max:255'],
            'email'             => ['nullable', 'email'],
            'phone_area_code'   => ['required', 'regex:/^\d{2,5}$/'],
            'phone_local_code'  => ['required', 'regex:/^\d{1,4}$/'],
            'phone_subscriber'  => ['required', 'regex:/^\d{4}$/'],
            'memo'              => ['nullable', 'string'],
            'postal_code'       => ['nullable', 'regex:/^\d{3}-?\d{4}$/'], // 例: 123-4567 または 1234567
            'prefecture'        => ['nullable', 'string', 'max:100'],
            'city'              => ['nullable', 'string', 'max:100'],
            'street'            => ['nullable', 'string', 'max:255'],
            'building'          => ['nullable', 'string', 'max:255'],
            'company_name'      => ['nullable', 'string', 'max:255'],
            'department'        => ['nullable', 'string', 'max:255'],
        ];
    }
}
