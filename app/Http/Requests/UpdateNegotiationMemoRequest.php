<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNegotiationMemoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_name' => ['nullable', 'string', 'max:255'],
            'meeting_date' => ['nullable', 'date'],
            'meeting_place' => ['nullable', 'string', 'max:255'],
            'contact_name' => ['nullable', 'string', 'max:255'],
            'position' => ['nullable', 'string', 'max:255'],
            'budget' => ['nullable', 'string', 'max:255'],
            'authority' => ['nullable', 'string', 'max:255'],
            'needs' => ['nullable', 'string', 'max:255'],
            'timing' => ['nullable', 'string', 'max:255'],
            'competitor' => ['nullable', 'string', 'max:255'],
            'decision_maker' => ['nullable', 'string', 'max:255'],
            'influence' => ['nullable', 'string', 'max:255'],
            'relationship' => ['nullable', 'string', 'max:255'],
            'summary' => ['nullable', 'string'],
            'problems' => ['nullable', 'string'],
            'others' => ['nullable', 'string'],
            'next_meeting' => ['nullable', 'string'],
        ];
    }
}
