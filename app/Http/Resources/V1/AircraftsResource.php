<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AircraftsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'group'=>$this->group,
            'type'=>$this->type,
            'manufacturer'=>$this->manufacturer,
            'prefix'=>$this->prefix,
            'code_icao'=>$this->code_icao,
            'tug'=>$this->tug,
            'widescreen'=>$this->widescreen,
            'simulator'=>$this->simulator,
            'seat'=>$this->seat,
            'crew'=>$this->crew,
            'serial'=>$this->serial,
            'since'=>$this->since,
            'owner'=>$this->owner,
            'operator'=>$this->operator,
            'weight'=>$this->weight,
        ];
    }
}
