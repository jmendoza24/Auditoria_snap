<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class hallazgos
 * @package App\Models
 * @version January 24, 2020, 10:21 pm UTC
 *
 * @property integer id
 * @property integer anio
 * @property integer trimestre
 * @property string region
 * @property string direccion
 * @property integer auditor
 * @property integer auditor2
 * @property string proceso
 * @property string depto
 * @property string area
 * @property integer responsable
 * @property string calificacion
 * @property string hallazgo
 * @property string recomendacion
 * @property string riesgo
 * @property string accion
 * @property string fecha_inf
 * @property string fecha_com
 * @property string estatus
 * @property string archivo
 * @property integer fila
 * @property string fila_id
 * @property string anexo
 * @property string comentarios
 * @property string accion2
 * @property string situacion
 * @property integer num_apoyo
 * @property integer jefatura
 * @property integer gerencia
 * @property string fec_usr
 * @property string aud_tip_val
 * @property number aud_monto
 * @property integer ano_folio
 * @property string aud_reincidente
 * @property string aud_com_anexo
 * @property integer aud_fir_val
 * @property string aud_fec_asignado
 * @property string aud_fec_revisado
 * @property string aud_fec_final
 * @property string user_id
 * @property integer enviar_mail
 * @property string user_id_resp
 * @property string tipo
 */
class hallazgos extends Model
{
    #use SoftDeletes;

    public $table = 'audita_hallazgo';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'anio',
        'trimestre',
        'region',
        'direccion',
        'auditor',
        'auditor2',
        'proceso',
        'depto',
        'area',
        'responsable',
        'calificacion',
        'hallazgo',
        'recomendacion',
        'riesgo',
        'accion',
        'fecha_inf',
        'fecha_com',
        'estatus',
        'archivo',
        'fila',
        'fila_id',
        'anexo',
        'comentarios',
        'accion2',
        'situacion',
        'num_apoyo',
        'jefatura',
        'gerencia',
        'fec_usr',
        'aud_tip_val',
        'aud_monto',
        'ano_folio',
        'aud_reincidente',
        'aud_com_anexo',
        'aud_fir_val',
        'aud_fec_asignado',
        'aud_fec_revisado',
        'aud_fec_final',
        'user_id',
        'enviar_mail',
        'user_id_resp',
        'tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'anio' => 'integer',
        'trimestre' => 'integer',
        'region' => 'string',
        'direccion' => 'string',
        'auditor' => 'integer',
        'auditor2' => 'integer',
        'proceso' => 'string',
        'depto' => 'string',
        'area' => 'string',
        'responsable' => 'integer',
        'calificacion' => 'string',
        'hallazgo' => 'string',
        'recomendacion' => 'string',
        'riesgo' => 'string',
        'accion' => 'string',
        'fecha_inf' => 'string',
        'fecha_com' => 'string',
        'estatus' => 'string',
        'archivo' => 'string',
        'fila' => 'integer',
        'fila_id' => 'string',
        'anexo' => 'string',
        'comentarios' => 'string',
        'accion2' => 'string',
        'situacion' => 'string',
        'num_apoyo' => 'integer',
        'jefatura' => 'integer',
        'gerencia' => 'integer',
        'fec_usr' => 'string',
        'aud_tip_val' => 'string',
        'aud_monto' => 'float',
        'ano_folio' => 'integer',
        'aud_reincidente' => 'string',
        'aud_com_anexo' => 'string',
        'aud_fir_val' => 'integer',
        'aud_fec_asignado' => 'string',
        'aud_fec_revisado' => 'string',
        'aud_fec_final' => 'string',
        'user_id' => 'string',
        'enviar_mail' => 'integer',
        'user_id_resp' => 'string',
        'tipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    function tipo_persona($tipo){
        return db::table('users')->where('tipo',$tipo)->get();
    }

    
}
