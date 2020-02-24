<?php

namespace App\Repositories;

use App\Models\PlanDuracions;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanDuracionsRepository
 * @package App\Repositories
 * @version January 4, 2020, 6:12 pm EST
 *
 * @method PlanDuracions findWithoutFail($id, $columns = ['*'])
 * @method PlanDuracions find($id, $columns = ['*'])
 * @method PlanDuracions first($columns = ['*'])
*/
class PlanDuracionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'plan_id',
        'cantidad',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanDuracions::class;
    }
}
