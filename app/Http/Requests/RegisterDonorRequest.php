<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterDonorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'birth_date' => 'nullable|date|before:' . now()->subYears(18)->format('d-m-Y'),
            'phone_number' => 'nullable|numeric|unique:user,phone_number|digits:9|starts_with:65,67,68,69,66,232',
            'groupBlood' => ['nullable', Rule::in(array_keys(User::GROUPBLOOD))],
            'location' => ['nullable', 'exists:cities,id'],

        ];
    }
}
