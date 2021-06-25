<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Rema
 * @package App\Models
 * @version June 24, 2021, 4:27 pm CST
 *
 * @property \App\Models\RemasEstado $estado
 * @property \App\Models\Paciente $paciente
 * @property \Illuminate\Database\Eloquent\Collection $signosVitales
 * @property \Illuminate\Database\Eloquent\Collection $ventilacionesMecanicas
 * @property integer $paciente_id
 * @property integer $user_id
 * @property integer $estado_id
 * @property string $numero_unidad
 * @property string $nombres_conductor
 * @property string $apellidos_conductor
 * @property string|\Carbon\Carbon $hora_de_llamada
 * @property string|\Carbon\Carbon $hora_de_salida
 * @property string|\Carbon\Carbon $hora_de_llegada
 * @property string $clasificacion_triaje
 * @property string $motivo_consulta
 * @property string $evaluacion_primaria_a
 * @property string $evaluacion_primaria_b
 * @property string $evaluacion_primaria_c
 * @property string $evaluacion_primaria_d
 * @property string $evaluacion_primaria_e
 * @property string $evaluacion_secundaria_s
 * @property string $evaluacion_secundaria_a
 * @property string $evaluacion_secundaria_m
 * @property string $evaluacion_secundaria_p
 * @property string $evaluacion_secundaria_l
 * @property string $evaluacion_secundaria_e
 * @property string $atencion_enfermeria
 * @property string $antecedentes_morbidos
 * @property string $alergias
 * @property string $medicamentos_habituales
 * @property string $via_aerea
 * @property string $aspiracion_secreciones
 * @property string $oxigenoterapia_fio2
 * @property string $asistencia_ventilatoria
 * @property string $acceso_vascular_numero
 * @property string $acceso_vascular_ubicacion
 * @property string $administracion_parenteral
 * @property string $sondeo_gastrico_numero
 * @property string $sondeo_gastrico_debito
 * @property string $monitoreo_ekg
 * @property string $desfibrilacion
 * @property string $cardioversion_farm
 * @property string $marcapaso
 * @property string $frecuencia_cardiaca
 * @property string $inmovilizacion
 * @property string $extricacion
 * @property string $rcr
 * @property string $sondeo_vesical
 * @property string $otros
 * @property string|\Carbon\Carbon $ventilacion_hora_recepcion
 * @property string|\Carbon\Carbon $fallecimiento_hora
 */
class Rema extends Model
{
    use SoftDeletes;

    public $table = 'remas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'paciente_id',
        'user_id',
        'estado_id',
        'numero_unidad',
        'nombres_conductor',
        'apellidos_conductor',
        'hora_de_llamada',
        'hora_de_salida',
        'hora_de_llegada',
        'clasificacion_triaje',
        'motivo_consulta',
        'evaluacion_primaria_a',
        'evaluacion_primaria_b',
        'evaluacion_primaria_c',
        'evaluacion_primaria_d',
        'evaluacion_primaria_e',
        'evaluacion_secundaria_s',
        'evaluacion_secundaria_a',
        'evaluacion_secundaria_m',
        'evaluacion_secundaria_p',
        'evaluacion_secundaria_l',
        'evaluacion_secundaria_e',
        'atencion_enfermeria',
        'antecedentes_morbidos',
        'alergias',
        'medicamentos_habituales',
        'via_aerea',
        'aspiracion_secreciones',
        'oxigenoterapia_fio2',
        'asistencia_ventilatoria',
        'acceso_vascular_numero',
        'acceso_vascular_ubicacion',
        'administracion_parenteral',
        'sondeo_gastrico_numero',
        'sondeo_gastrico_debito',
        'monitoreo_ekg',
        'desfibrilacion',
        'cardioversion_farm',
        'marcapaso',
        'frecuencia_cardiaca',
        'inmovilizacion',
        'extricacion',
        'rcr',
        'sondeo_vesical',
        'otros',
        'ventilacion_hora_recepcion',
        'fallecimiento_hora'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paciente_id' => 'integer',
        'user_id' => 'integer',
        'estado_id' => 'integer',
        'numero_unidad' => 'string',
        'nombres_conductor' => 'string',
        'apellidos_conductor' => 'string',
        'clasificacion_triaje' => 'string',
        'motivo_consulta' => 'string',
        'evaluacion_primaria_a' => 'string',
        'evaluacion_primaria_b' => 'string',
        'evaluacion_primaria_c' => 'string',
        'evaluacion_primaria_d' => 'string',
        'evaluacion_primaria_e' => 'string',
        'evaluacion_secundaria_s' => 'string',
        'evaluacion_secundaria_a' => 'string',
        'evaluacion_secundaria_m' => 'string',
        'evaluacion_secundaria_p' => 'string',
        'evaluacion_secundaria_l' => 'string',
        'evaluacion_secundaria_e' => 'string',
        'atencion_enfermeria' => 'string',
        'antecedentes_morbidos' => 'string',
        'alergias' => 'string',
        'medicamentos_habituales' => 'string',
        'via_aerea' => 'string',
        'aspiracion_secreciones' => 'string',
        'oxigenoterapia_fio2' => 'string',
        'asistencia_ventilatoria' => 'string',
        'acceso_vascular_numero' => 'string',
        'acceso_vascular_ubicacion' => 'string',
        'administracion_parenteral' => 'string',
        'sondeo_gastrico_numero' => 'string',
        'sondeo_gastrico_debito' => 'string',
        'monitoreo_ekg' => 'string',
        'desfibrilacion' => 'string',
        'cardioversion_farm' => 'string',
        'marcapaso' => 'string',
        'frecuencia_cardiaca' => 'string',
        'inmovilizacion' => 'string',
        'extricacion' => 'string',
        'rcr' => 'string',
        'sondeo_vesical' => 'string',
        'otros' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'run' => 'required|string|max:255',
        'dv_run' => 'required|string|max:255',

        'apellido_paterno' => 'required|string|max:255',
        'apellido_materno' => 'nullable|string|max:255',
        'primer_nombre' => 'required|string|max:255',
        'segundo_nombre' => 'nullable|string|max:255',
        'fecha_nac' => 'required',
        'sigla_grado' => 'nullable',
        'unid_rep_dot' => 'nullable',
        'cond_alta_dot' => 'nullable',


        'hora_de_llamada' => 'required',
        'hora_de_salida' => 'required',
        'hora_de_llegada' => 'required',

        'motivo_consulta' => 'required|string',
        'clasificacion_triaje' => 'required|string|max:255',
        'atencion_enfermeria' => 'required|string',
        'antecedentes_morbidos' => 'required|string',
        'alergias' => 'required|string',
        'medicamentos_habituales' => 'required|string',

        'evaluacion_primaria_a' => 'nullable|string',
        'evaluacion_primaria_b' => 'nullable|string',
        'evaluacion_primaria_c' => 'nullable|string',
        'evaluacion_primaria_d' => 'nullable|string',
        'evaluacion_primaria_e' => 'nullable|string',
        'evaluacion_secundaria_s' => 'nullable|string',
        'evaluacion_secundaria_a' => 'nullable|string',
        'evaluacion_secundaria_m' => 'nullable|string',
        'evaluacion_secundaria_p' => 'nullable|string',
        'evaluacion_secundaria_l' => 'nullable|string',
        'evaluacion_secundaria_e' => 'nullable|string',
        'via_aerea' => 'nullable|string|max:255',
        'aspiracion_secreciones' => 'nullable|string|max:255',
        'oxigenoterapia_fio2' => 'nullable|string|max:45',
        'asistencia_ventilatoria' => 'nullable|string|max:45',
        'acceso_vascular_numero' => 'nullable|string|max:45',
        'acceso_vascular_ubicacion' => 'nullable|string|max:45',
        'administracion_parenteral' => 'nullable|string|max:45',
        'sondeo_gastrico_numero' => 'nullable|string|max:45',
        'sondeo_gastrico_debito' => 'nullable|string|max:45',
        'monitoreo_ekg' => 'nullable|string|max:2',
        'desfibrilacion' => 'nullable|string|max:45',
        'cardioversion_farm' => 'nullable|string|max:45',
        'marcapaso' => 'nullable|string|max:45',
        'inmovilizacion' => 'nullable|string|max:45',
        'extricacion' => 'nullable|string|max:2',
        'rcr' => 'nullable|string|max:45',
        'sondeo_vesical' => 'nullable|string|max:45',
        'otros' => 'nullable|string|max:45',
        'ventilacion_hora_recepcion' => 'nullable',
        'fallecimiento_hora' => 'nullable',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function estado()
    {
        return $this->belongsTo(\App\Models\RemaEstado::class, 'estado_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paciente()
    {
        return $this->belongsTo(\App\Models\Paciente::class, 'paciente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function signosVitales()
    {
        return $this->hasMany(\App\Models\RemaSignoVital::class, 'rema_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ventilacionesMecanicas()
    {
        return $this->hasMany(\App\Models\RemaVentilacioneMecanica::class, 'rema_id');
    }
}
