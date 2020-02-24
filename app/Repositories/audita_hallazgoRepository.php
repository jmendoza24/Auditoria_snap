<?php

namespace App\Repositories;

use App\Models\audita_hallazgo;
use App\Repositories\BaseRepository;

/**
 * Class audita_hallazgoRepository
 * @package App\Repositories
 * @version February 5, 2020, 4:37 am UTC
*/

class audita_hallazgoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'tipo',
        'calificacion_num',
        'causa_raiz',
        'empresa'

    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return audita_hallazgo::class;
    }
}
