<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class grupo
 * @package App\Models
 * @version November 30, 2021, 12:29 pm -03
 *
 * @property string $nombre
 */
class grupo extends Model
{
    use SoftDeletes;

    public $table = 'grupos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function examen()
    {
        return $this->hasMany(\App\Models\examen::class, 'examen_id');
    }

    
}
