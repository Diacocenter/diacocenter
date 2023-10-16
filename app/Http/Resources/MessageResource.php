<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name"      => User::find($this->user_id)->first_name . User::find($this->user_id)->last_name,
            "message"   => $this->message,
            "date"      => $this->created_at->diffForHumans(),
            //          "role"     => $this->user->role_is,
            "is_sender" => $this->user_id === auth()->user()->id ? true : false,
            "user_id"   => $this->user_id
        ];
    }
}
