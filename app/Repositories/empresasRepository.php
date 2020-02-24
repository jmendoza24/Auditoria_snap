<?php

namespace App\Repositories;

use App\Models\empresas;
use App\Repositories\BaseRepository;

/**
 * Class empresasRepository
 * @package App\Repositories
 * @version February 10, 2020, 11:12 pm UTC
*/

class empresasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'razon_social'
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
        return empresas::class;
    }
}
