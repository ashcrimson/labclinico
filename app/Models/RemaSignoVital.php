<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class RemaSignoVital
 * @package App\Models
 * @version June 24, 2021, 4:35 pm CST
 *
 * @property \App\Models\Rema $rema
 * @property integer $rema_id
 * @property string|\Carbon\Carbon $hora
 * @property integer $pulso
 * @property integer $presion_arterial_ps
 * @property integer $presion_arterial_pd
 * @property string $frecuencia_cardiaca
 * @property string $frecuencia_respiratoria
 * @property number $temperatura_axilar
 * @property number $temperatura_rectal
 * @property string $saturacion_oxigeno
 * @property string $hgt
 * @property string $eva
 * @property string $gsc
 * @property string $ekg
 */
class RemaSignoVital extends Model
{
    use SoftDeletes;

    public $table = 'remas_signos_vitales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'rema_id',
        'hora',
        'pulso',
        'presion_arterial_ps',
        'presion_arterial_pd',
        'frecuencia_cardiaca',
        'frecuencia_respiratoria',
        'temperatura_axilar',
        'temperatura_rectal',
        'saturacion_oxigeno',
        'hgt',
        'eva',
        'gsc',
        'ekg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rema_id' => 'integer',
        'hora' => 'datetime',
        'pulso' => 'integer',
        'presion_arterial_ps' => 'integer',
        'presion_arterial_pd' => 'integer',
        'frecuencia_cardiaca' => 'string',
        'frecuencia_respiratoria' => 'string',
        'temperatura_axilar' => 'decimal:2',
        'temperatura_rectal' => 'decimal:2',
        'saturacion_oxigeno' => 'string',
        'hgt' => 'string',
        'eva' => 'string',
        'gsc' => 'string',
        'ekg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rema_id' => 'required',
        'hora' => 'required',
        'pulso' => 'required|integer',
        'presion_arterial_ps' => 'required|integer',
        'presion_arterial_pd' => 'required|integer',
        'frecuencia_cardiaca' => 'required|string|max:45',
        'frecuencia_respiratoria' => 'required|string|max:45',
        'temperatura_axilar' => 'required|numeric',
        'temperatura_rectal' => 'nullable|numeric',
        'saturacion_oxigeno' => 'nullable|string|max:45',
        'hgt' => 'nullable|string|max:45',
        'eva' => 'nullable|string|max:45',
        'gsc' => 'nullable|string|max:45',
        'ekg' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function rema()
    {
        return $this->belongsTo(\App\Models\Rema::class, 'rema_id');
    }
}
