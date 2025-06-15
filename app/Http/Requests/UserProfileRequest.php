<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
        $rules = [
        'avatar' => ['nullable', 'image', 'max:500'],
        'name' => ['required', 'string', 'max:50'],
        'userName' => ['required', 'string', 'max:50'],
        'email' => ['required', 'email', 'max:100'],
    ];


    if ($this->filled('current_password')) {
        $rules['current_password'] = ['required', 'current_password'];
        $rules['password'] = ['required', 'string', 'min:6', 'confirmed'];
    }

    return $rules;
    }
}
