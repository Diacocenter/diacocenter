<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "title"              =>  $this->title,
            "status"             =>  $this->status->description,
            "slug"               =>  $this->slug,
            "short_summary"      =>  $this->short_summary,
            "tender_death_line"  =>  $this->tender_death_line,
            "user_id"            =>  $this->pivot->user_id,
            "project_id"         =>  asset("/storage/projects" . $this->pivot->project_id)
        ];
    }
}
