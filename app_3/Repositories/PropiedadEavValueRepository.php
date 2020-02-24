<?php

namespace App\Repositories;

use App\Models\PropiedadEavValue;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropiedadEavValueRepository
 * @package App\Repositories
 * @version November 20, 2019, 7:58 pm EST
 *
 * @method PropiedadEavValue findWithoutFail($id, $columns = ['*'])
 * @method PropiedadEavValue find($id, $columns = ['*'])
 * @method PropiedadEavValue first($columns = ['*'])
*/
class PropiedadEavValueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'propiedad_eav_id',
        'propiedad_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropiedadEavValue::class;
    }
}
