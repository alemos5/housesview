<?php

namespace App\Repositories;

use App\Models\PropiedadEavs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropiedadEavsRepository
 * @package App\Repositories
 * @version January 9, 2020, 8:32 pm EST
 *
 * @method PropiedadEavs findWithoutFail($id, $columns = ['*'])
 * @method PropiedadEavs find($id, $columns = ['*'])
 * @method PropiedadEavs first($columns = ['*'])
*/
class PropiedadEavsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'attribute',
        'icon',
        'grupo_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropiedadEavs::class;
    }
}
