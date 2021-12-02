<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class solicitud
 * @package App\Models
 * @version December 2, 2021, 10:16 am -03
 *
 */
class solicitud extends Model
{
    use SoftDeletes;

    public $table = 'solicituds';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'diagnostico_id',
        'notas',
        'programacion'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function diagnostico()
    {
        return $this->hasOne(\App\Models\diagnostico::class, 'diagnostico_id');
    }

    
}
