<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdresseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'full_adresse' => $this->adresse .", ". $this->region->designation .", ". $this->region->gouvernorat->designation .", ". $this->code_postal.", ". $this->region->gouvernorat->pays->designation,
            'adresse' => $this->adresse,
            'code_postal' => $this->code_postal,
            'region' => $this->region->designation,
            'gouvernorat' => $this->region->gouvernorat->designation,
            'pays' => $this->region->gouvernorat->pays->designation
        ];
    }
}
