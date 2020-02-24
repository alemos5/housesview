<?php

namespace App\Repositories;

use App\Models\autor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class autorRepository
 * @package App\Repositories
 * @version August 23, 2019, 8:37 pm EDT
 *
 * @method autor findWithoutFail($id, $columns = ['*'])
 * @method autor find($id, $columns = ['*'])
 * @method autor first($columns = ['*'])
*/
class autorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return autor::class;
    }
}
