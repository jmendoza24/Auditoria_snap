<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class empresas
 * @package App\Models
 * @version February 10, 2020, 11:12 pm UTC
 *
 * @property string razon_social
 */
class empresas extends Model
{
    use SoftDeletes;

    public $table = 'empresas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'razon_social'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'razon_social' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
