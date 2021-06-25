<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RemaVentilacionMecanicaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'rema_id' => $this->rema_id,
            'hora' => $this->hora,
            'vol' => $this->vol,
            'peep' => $this->peep,
            'tie' => $this->tie,
            'fr' => $this->fr,
            'pf' => $this->pf,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}
