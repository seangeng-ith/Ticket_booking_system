<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowTeamMatchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'event'=> $this->event->name,
            'team'=> $this-> team->name,
            'match'=> $this->match,
            'schedule'=> $this->schedule,
        ];
    }
}
