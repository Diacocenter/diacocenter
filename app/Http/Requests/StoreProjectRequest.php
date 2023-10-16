<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            "title"                     => ["required", "string", "min:3", "max:250"],
            "location"                  => ["required", "string"],
            "start_date"                => ["required", "string"],
            "end_date"                  => ["required", "string"],
            "description"               => ["required", "max:1000"],
            "skills"                    => ["required", "array"],
            "file"                      => ["required", "array"],
            "phase"                     => [ "array"],
            "phase.*.title"             => [ "string"],
            "phase.*.description"       => [ "string", "max:1000"],
            "phase.*.start_date"        => [ "string"],
            "phase.*.start_tender_date" => [ "string"],
            "phase.*.end_date"          => [ "string"],
            "phase.*.end_tender_date"   => [ "string"],
            "phase.*.skills"            => [ "array"],
            "phase.*.prerequisite"      => [ "array"],
            "phase.*.agreements"        => ["array"],
            "phase.*.documents"         => ["array"],
        ];
    }
}
