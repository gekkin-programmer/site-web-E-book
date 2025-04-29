<?php

namespace App\Http\Requests\frontend;

use Illuminate\Foundation\Http\FormRequest;

class userregisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'age' => ['required', 'integer'],
            'profession' => ['required', 'max:255'],
            'number' => ['required', 'integer'],
            'country' => ['nullable', 'max:255'],
            'state' => ['nullable', 'max:255'],
            'city' => ['nullable', 'max:255'],
            'adresse_1' => ['required', 'max:255'],
            'adresse_2' => ['nullable', 'max:255'],
            'money' => ['required', 'max:255'],
            'book' => ['required', 'max:255'],
            'validate' => ['required', 'max:255'],
        ];
    }
}
