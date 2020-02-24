<?php

namespace App\Repositories;

use App\Models\documentos;
use App\Repositories\BaseRepository;

/**
 * Class documentosRepository
 * @package App\Repositories
 * @version February 10, 2020, 11:12 pm UTC
*/

class documentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_documento'
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
        return documentos::class;
    }
}
