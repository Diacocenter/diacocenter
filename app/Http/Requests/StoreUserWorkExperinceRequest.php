<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserWorkExperinceRequest extends FormRequest
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
            "id"           => ["max:250"],
            "title"        => ["max:30"],
            "location"     => ["string","min:1","max:50"],
            "company_name" => ["required", "max:250"],
            "from"         => ["numeric", "required", "min:1900", "max:" . Carbon::now()->year],
            "to"           => ["nullable", "numeric", "min:1900", "max:" . Carbon::now()->year],
            "job_type"     => ["required"],
            "description"  => ["max:250"]
        ];
    }
}
