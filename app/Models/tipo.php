<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class tipo
 * @package App\Models
 * @version November 30, 2021, 12:34 pm -03
 *
 * @property string $nombre
 */
class tipo extends Model
{
    use SoftDeletes;

    public $table = 'tipos';
    

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

    
}
