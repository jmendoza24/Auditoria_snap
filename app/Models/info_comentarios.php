<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class info_comentarios
 * @package App\Models
 * @version February 13, 2020, 3:59 am UTC
 *
 * @property integer id_usuario
 * @property integer id_hallazgo
 * @property string comentarios
 * @property string archivo
 */
class info_comentarios extends Model
{
    use SoftDeletes;

    public $table = 'info_comentarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_usuario',
        'id_hallazgo',
        'comentarios',
        'nom_doc',
        'archivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_usuario' => 'integer',
        'id_hallazgo' => 'integer',
        'comentarios' => 'string',
        'nom_doc' => 'string',        
        'archivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


     public function carga_comentarios($id_hallazgo)
    {
        

     return   DB::table('info_comentarios as ic')
              ->join('audita_hallazgo as ah','ah.id','=','ic.id_hallazgo')
              ->join('users as u','u.id','=','ic.id_usuario')
              ->selectraw('ic.nom_doc as nom_doc,u.usuario as usuario,ic.id_usuario as id_usuario,ic.id as id,u.usuario as nombre,ic.comentarios as comentarios,ic.archivo as archivo,ic.created_at as fecha')
              ->get();
    }

    public function carga_com($request)
    {

     return   DB::table('info_comentarios as ic')
              ->join('audita_hallazgo as ah','ah.id','=','ic.id_hallazgo')
              ->join('users as u','u.id','=','ic.id_usuario')
              ->selectraw('ic.id as idic,ic.id_hallazgo as id_hallazgo,ic.nom_doc as nom_doc,u.usuario as usuario,ic.id_usuario as id_usuario,ic.id as id,u.usuario as nombre,ic.comentarios as comentarios,ic.archivo as archivo,ic.created_at as fecha')
              ->where('ic.id',$request['id'])
              ->get();
    }

    
}
