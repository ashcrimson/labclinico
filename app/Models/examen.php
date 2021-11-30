<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class examen
 * @package App\Models
 * @version November 30, 2021, 12:26 pm -03
 *
 * @property string $codigo
 * @property string $nombre
 * @property integer $grupo_id
 */
class examen extends Model
{
    use SoftDeletes;

    public $table = 'examens';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'codigo',
        'nombre',
        'grupo_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo' => 'string',
        'nombre' => 'string',
        'grupo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function grupo()
    {
        return $this->belongsTo(\App\Models\grupo::class, 'grupo_id');
    }


    
}
