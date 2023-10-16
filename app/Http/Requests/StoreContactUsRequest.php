<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUsRequest extends FormRequest
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
            "first_name"   => ["required", "min:3", "max:50"],
            "last_name"    => ["required", "min:3", "max:50"],
            "email"        => ["required", "min:10", "max:50" , "email"],
            "phone_number" => ["min:10", "max:15" ],
            "message"      => ["required", "min:20", "max:150"],
        ];
    }
}
