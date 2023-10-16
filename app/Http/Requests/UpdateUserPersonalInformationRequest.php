<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserPersonalInformationRequest extends FormRequest
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
            "first_name" => ["required", "min:3", "max:30"],
            "last_name" => ["required", "min:3", "max:30"],
            "email"    =>  ["required","min:3","max:30"],
            "slug" => ["required", "min:5", "max:150"],
            "sex" => ["required", "min:0", "max:3", "numeric"],
            "about_me" => ["required", "min:20", "max:550"],
            "file" => ["max:30"]
        ];
    }
}
