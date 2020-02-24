<?php

namespace App\Repositories;

use App\Models\Ordenes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdenesRepository
 * @package App\Repositories
 * @version January 5, 2020, 9:23 am EST
 *
 * @method Ordenes findWithoutFail($id, $columns = ['*'])
 * @method Ordenes find($id, $columns = ['*'])
 * @method Ordenes first($columns = ['*'])
*/
class OrdenesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'plan_id',
        'plan_valor',
        'plan_duracion_id',
        'plan_duracion_valor',
        'orden',
        'user_id',
        'estatus',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ordenes::class;
    }
}
