<?php

namespace App\Repositories;

use App\Models\PropiedadEavs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropiedadEavsRepository
 * @package App\Repositories
 * @version November 20, 2019, 8:43 pm EST
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
