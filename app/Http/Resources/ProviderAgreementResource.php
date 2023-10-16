<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderAgreementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'      =>  $this->id,
            'date'    =>  Carbon::parse($this->pivot->created_at)->format('Y/m/d'),
            'title'   =>  $this->title,
            'link'    =>  $this->link,
            'status'  =>  $this->pivot->status
        ];
    }
}
