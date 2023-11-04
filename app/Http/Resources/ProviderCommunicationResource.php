<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderCommunicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->assignBy->id === auth()->user()->id) {
            $role = $this->user->roles()->pluck('name')->first();
            return [
                "assigned_fname"      => $this->user->name,
                "assigned_lname"     => $this->user->lname,
                "assigned_name"    => $this->user->name,
                "role"             => $role,
                "assigned_picture" => asset("/storage/users/profile/" . $this->user->profileImage->url),
                "communication_id" => $this->id,
                "date"             => Carbon::create($this->records->last()->created_at)->diffForHumans(),
                "has_unread"       => $this->records()->where("is_read", "=", false)->count() > 0 ? true : false
            ];
        } else {
            $role = $this->assignBy->roles()->pluck('name')->first();
            return [
                "assigned_fname"      => $this->assignBy->name,
                "assigned_lname"     => $this->assignBy->lname,
                "assigned_name"    => $this->assignBy->name,
                "role"             => $role,
                "assigned_picture" => asset("/storage/users/profile/" . $this->assignBy->profileImage->url),
                "communication_id" => $this->id,
                "date"             => Carbon::create($this->records->last()->created_at)->diffForHumans(),
                "has_unread"       => $this->records()->where("is_read", "=", false)->count() > 0 ? true : false
            ];
        }

    }
//    {
//
//        return [
//            "title"            => $this->title,
//            "assigned_picture" => asset("/storage/users/profile/" . $this->assignBy->profileImage->url),
//            "assigned_fname"   => $this->assignBy->first_name,
//            "assigned_name"    => $this->assignBy->name,
//            "communication_id" => $this->id,
//            "assigned_lname"   => $this->assignBy->last_name,
//            "assigned_role"    => $this->assignBy->role_is,
//            "date"             => Carbon::create($this->assignBy->created_at)->diffForHumans(),
//            "has_unread"       => $this->records()->where("is_read", "=", false)->count() > 0 ? true : false
//        ];
//    }
}
