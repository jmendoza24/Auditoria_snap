<?php

namespace App\Repositories;

use App\Models\localidad;
use App\Repositories\BaseRepository;

/**
 * Class localidadRepository
 * @package App\Repositories
 * @version February 11, 2020, 12:54 am UTC
*/

class localidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_loc'
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
        return localidad::class;
    }
}
