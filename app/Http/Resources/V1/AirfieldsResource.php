<?php

namespace App\Http\Resources\V1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AirfieldsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'typeUse'               => $this->typeUse,
            'codigoOaci'            => $this->codigoOaci,
            'ciad'                  => $this->ciad,
            'name'                  => $this->name,
            'city'                  => $this->city,
            'cityServed'            => $this->cityServed,
            'state'                 => $this->state,
            'stateServed'           => $this->stateServed,
            'altitude'              => $this->altitude,
            'latitude'              => $this->latitude,
            'longitude'             => $this->longitude,
            'latGeoPoint'           => $this->latGeoPoint,
            'lonGeoPoint'           => $this->lonGeoPoint,
            'length'                => $this->length,
            'length2'               => $this->length2,
            'width'                 => $this->width,
            'width2'                => $this->width2,
            'surface'               => $this->surface,
            'surface2'              => $this->surface2,
            'designation'           => $this->designation,
            'designation2'          => $this->resistence,
            'resistence'            => $this->resistence,
            'resistence2'           => $this->resistence2,
            'operationDay'          => $this->operationDay,
            'operationNight'        => $this->operationNight,
            'ordinanceRegistration' => $this->ordinanceRegistration,
            'ordinanceLink'         => $this->ordinanceLink,
            'registrationValidity'  => $this->registrationValidity,
            'updated_at'            => ($this->updated_at ? Carbon::parse( $this->updated_at)->format('d/m/Y') : null),
        ];
    }
}
