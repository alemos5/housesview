<?php

namespace App\Repositories;

use App\Models\Provincias;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProvinciasRepository
 * @package App\Repositories
 * @version November 19, 2019, 9:15 pm EST
 *
 * @method Provincias findWithoutFail($id, $columns = ['*'])
 * @method Provincias find($id, $columns = ['*'])
 * @method Provincias first($columns = ['*'])
*/
class ProvinciasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'provincia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Provincias::class;
    }
}
