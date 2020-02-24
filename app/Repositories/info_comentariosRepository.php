<?php

namespace App\Repositories;

use App\Models\info_comentarios;
use App\Repositories\BaseRepository;

/**
 * Class info_comentariosRepository
 * @package App\Repositories
 * @version February 13, 2020, 3:59 am UTC
*/

class info_comentariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_usuario',
        'id_hallazgo',
        'comentarios',
        'nom_doc',
        'archivo'
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
        return info_comentarios::class;
    }
}
