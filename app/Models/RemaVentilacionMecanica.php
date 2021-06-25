<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class RemaVentilacionMecanica
 * @package App\Models
 * @version June 24, 2021, 4:35 pm CST
 *
 * @property \App\Models\Rema $rema
 * @property integer $rema_id
 * @property string|\Carbon\Carbon $hora
 * @property string $vol
 * @property string $peep
 * @property string $tie
 * @property string $fr
 * @property string $pf
 */
class RemaVentilacionMecanica extends Model
{
    use SoftDeletes;

    public $table = 'remas_ventilaciones_mecanicas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $appends = ['hora_format'];

    public $fillable = [
        'rema_id',
        'hora',
        'vol',
        'peep',
        'tie',
        'fr',
        'pf'
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
        'vol' => 'string',
        'peep' => 'string',
        'tie' => 'string',
        'fr' => 'string',
        'pf' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rema_id' => 'required',
        'hora' => 'required',
        'vol' => 'required|string|max:255',
        'peep' => 'required|string|max:255',
        'tie' => 'required|string|max:255',
        'fr' => 'required|string|max:255',
        'pf' => 'required|string|max:255',
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

    public function getHoraFormatAttribute()
    {
        return $this->hora->format("g:i A");
    }
}
