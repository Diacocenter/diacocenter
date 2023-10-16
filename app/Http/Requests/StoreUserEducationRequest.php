<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserEducationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "university" => ['required', 'max:30'],
            "location"   => ['required', 'max:50'],
            "from"       => ['required', 'max:10'],
            "to"         => ['required', 'max:30'],
            "title"      => ['required', 'max:30'],
            "degree"     => ['required', 'max:30']
        ];
    }
}
