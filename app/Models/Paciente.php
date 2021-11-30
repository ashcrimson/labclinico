<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Paciente
 * @package App\Models
 * @version July 12, 2021, 8:18 pm CST
 *
 * @property \Illuminate\Database\Eloquent\Collection $atenciones
 * @property \Illuminate\Database\Eloquent\Collection $remas
 * @property string $run
 * @property string $dv_run
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $fecha_nac
 * @property string $sexo
 *
 * @property string $direccion
 * @property string $familiar_responsable
 * @property string $telefono
 * @property string $telefono2
 * @property string $prevision_id
 *
 * @property string $sigla_grado
 * @property string $unid_rep_dot
 * @property integer $cond_alta_dot
 * @property string $nombre_completo
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $clave
 * @property boolean $movil_envia
 */
class Paciente extends Model
{
    use SoftDeletes,HasFactory;

    public $table = 'pacientes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'run',
        'dv_run',
        'apellido_paterno',
        'apellido_materno',
        'primer_nombre',
        'segundo_nombre',
        'fecha_nac',
        'sexo',
        'sigla_grado',
        'unid_rep_dot',
        'cond_alta_dot',

        'direccion',
        'familiar_responsable',
        'telefono',
        'telefono2',
        'prevision_id',
        'clave',
        'movil_envia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'run' => 'string',
        'dv_run' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',

        'sexo' => 'string',
        'sigla_grado' => 'string',
        'unid_rep_dot' => 'string',
        'cond_alta_dot' => 'integer'
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
        'apellido_materno' => 'required|string|max:255',
        'primer_nombre' => 'required|string|max:255',
        'segundo_nombre' => 'required|string|max:255',
        'fecha_nac' => 'required',
        'sigla_grado' => 'nullable',
        'unid_rep_dot' => 'nullable',
        'cond_alta_dot' => 'nullable',

    ];

    public function getNombreCompletoAttribute()
    {
        $nombre = $this->primer_nombre.' '.$this->segundo_nombre.' '.$this->apellido_paterno.' '.$this->apellido_materno;
        return str_replace('  ','',$nombre);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function atenciones()
    {
        return $this->hasMany(\App\Models\PacienteAtencion::class, 'paciente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function remas()
    {
        return $this->hasMany(\App\Models\Rema::class, 'paciente_id');
    }

}
