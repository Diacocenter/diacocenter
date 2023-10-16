<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderDiscoverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        dd($this->user->first_name);
        return [
            'title'           => $this->title,
            'slug'            => $this->slug,
            'short_summary'   => $this->description,
            'project_picture' => $this->gallery->first() ? asset("/storage/projects/" . $this->gallery->first()->url) : asset("/storage/projects/default.png"),
            'category'        => $this->skills,
//            'company_name'    => "rgter",
            'company_name'    => $this->user->first_name,
            'end_date'        => $this->end_date
        ];
    }
}
