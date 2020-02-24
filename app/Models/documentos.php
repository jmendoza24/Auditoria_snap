<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class documentos
 * @package App\Models
 * @version February 10, 2020, 11:12 pm UTC
 *
 * @property string nombre_documento
 */
class documentos extends Model
{
    use SoftDeletes;

    public $table = 'documentos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_documento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_documento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
