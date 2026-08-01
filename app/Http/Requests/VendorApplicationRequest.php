<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        if (is_array($this->event_dates)) {
            $this->merge([
                'event_dates' => implode(', ', $this->event_dates),
            ]);
        }

        if (is_array($this->categories)) {
            $this->merge([
                'categories' => implode(', ', $this->categories),
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string',
            'facebook_username' => 'nullable|string',
            'business_name' => 'required|string',
            'email' => 'required|string|email',
            'event_dates' => 'required|string',
            'booth' => 'required|string',
            'base' => 'required|string',
            'categories' => 'required|string',
        ];
    }
}
