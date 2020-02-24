<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class localidad
 * @package App\Models
 * @version February 11, 2020, 12:54 am UTC
 *
 * @property string nombre_loc
 */
class localidad extends Model
{
    use SoftDeletes;

    public $table = 'localidads';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_loc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_loc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
