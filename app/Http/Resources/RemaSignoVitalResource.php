<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RemaSignoVitalResource extends JsonResource
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
            'pulso' => $this->pulso,
            'presion_arterial_ps' => $this->presion_arterial_ps,
            'presion_arterial_pd' => $this->presion_arterial_pd,
            'frecuencia_cardiaca' => $this->frecuencia_cardiaca,
            'frecuencia_respiratoria' => $this->frecuencia_respiratoria,
            'temperatura_axilar' => $this->temperatura_axilar,
            'temperatura_rectal' => $this->temperatura_rectal,
            'saturacion_oxigeno' => $this->saturacion_oxigeno,
            'hgt' => $this->hgt,
            'eva' => $this->eva,
            'gsc' => $this->gsc,
            'ekg' => $this->ekg,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}
