<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'dni' => ['required', 'string', 'max:9'],
            'alias' => ['required', 'string', 'max:255'],
            'municipio' => ['required', 'string', 'max:255']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Es necesario poner un nombre.',
            'email.required'  => 'Es necesario poner el email.',
            'dni.required' => 'Es necesario poner un DNI.',
            'alias.required' => 'Es necesario poner un alias.',
            'municipio.required' => 'Es necesario poner el municipio.',
        ];
    }
}
