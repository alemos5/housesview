<?php

namespace App\Repositories;

use App\Models\PropiedadGrupos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropiedadGruposRepository
 * @package App\Repositories
 * @version November 20, 2019, 8:43 pm EST
 *
 * @method PropiedadGrupos findWithoutFail($id, $columns = ['*'])
 * @method PropiedadGrupos find($id, $columns = ['*'])
 * @method PropiedadGrupos first($columns = ['*'])
*/
class PropiedadGruposRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'grupo',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropiedadGrupos::class;
    }
}
