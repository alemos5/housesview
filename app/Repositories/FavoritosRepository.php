<?php

namespace App\Repositories;

use App\Models\Favoritos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FavoritosRepository
 * @package App\Repositories
 * @version January 10, 2020, 6:31 am EST
 *
 * @method Favoritos findWithoutFail($id, $columns = ['*'])
 * @method Favoritos find($id, $columns = ['*'])
 * @method Favoritos first($columns = ['*'])
*/
class FavoritosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'propiedad_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Favoritos::class;
    }
}
