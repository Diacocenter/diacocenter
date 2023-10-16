<?php

namespace App\Http\Resources;

use App\Enums\GenderStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReduxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->profileImage()->first()) {
            $profileImage = $this->profileImage()->first()->url;
        } else {
            $profileImage = match ($this->sex?->value) {
                GenderStatusEnum::male => "default.png",
                GenderStatusEnum::female => "default.png",
                default => "default.png",
            };
        }
        $communications = $this->communication()->get();
        if (!$communications){
         return "nothing";
        }else{
                $filteredCommunications = $communications->filter(function ($value, $key){
                return $value->records()->where("is_read", "=", false)->where("user_id", "<>", auth()->user()->id)->count() > 0;
            });
        }


        return [
            'name'            => $this->first_name,
            'profile_picture' => asset("/storage/users/profile/" . $profileImage),
            'slug'            => $this->slug,
            'role_is'         => $this->role_is,
            "communication"   => DashboardCommunicationResource::collection($this->communication()->latest()->limit(3)->get()),
            "notif"           => ["salam akbar","salam akbar","salam akbar","salam akbar","salam akbar","salam akbar","salam akbar",],
            "unread"          => UnreadResource::collection($filteredCommunications)
        ];
    }
}
