<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderDashboardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "title"            =>    $this->title,
            "project_image"            =>asset("/storage/projects/" . $this->gallery->first()->url),
            "short_summary"    =>    $this->short_summary,
            "company_name"     =>    $this->company_name,
        ];
    }
}
