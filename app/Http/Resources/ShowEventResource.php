<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowEventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'event_id'=> $this->id,
            'name'=> $this->name,
            'date'=> $this->date,
            'stadium'=> $this->stadium->name,
            'sport'=> $this->sport->sport,
            'teamMatches'=> $this->teamMatches,
            'tickets'=> $this->tickets,
        ];
    }
}
