<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'family_history' => 'required|boolean',
            'history_of_smoking' => 'required|boolean',
            'email' => 'required|unique:patients',
            'phone' => 'required|string|min:8|max:14',
            'password' => 'required'
        ];
    }
}
