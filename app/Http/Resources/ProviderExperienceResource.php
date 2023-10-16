<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderExperienceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"           => $this->id,
            "company_name" => $this->company_name,
            "title"        => $this->title,
            "status"       => $this->status->description,
            "job_type"     => $this->job_type->description,
            "from"         => $this->from,
            "to"           => $this->to ?: 'Until Now',
        ];
    }
}
