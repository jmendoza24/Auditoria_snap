<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
/**
 * Class Grado
 * @package App\Models
 * @version September 10, 2019, 4:22 am UTC
 *
 * @property string grado
 * @property string descripcion
 */
class Temporal_informe extends Model{

    public $table = 'informe_temporal';
    protected $dates = ['deleted_at'];

    protected $casts = [
        'hallazgo' => 'string',
        'tipo' => 'string',
        'recomendacion' => 'string',
        'riesgo' => 'string',
        'responsable' => 'string',
        'causa_raiz' => 'string',
        'accion' => 'string',
        'compromiso' => 'string',
        'calificacion' => 'string',
        'calif_numerico' => 'string'];


    function informe_temporal(){

        return db::table('informe_temporal as i')
                ->leftjoin('users as u','u.usuario','i.responsable')
                ->selectraw('i.*, if(i.responsable=u.usuario,1,0) as valida')
                ->get();
    }
}
