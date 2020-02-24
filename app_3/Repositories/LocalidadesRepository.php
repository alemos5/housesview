<?php

namespace App\Repositories;

use App\Models\Localidades;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LocalidadesRepository
 * @package App\Repositories
 * @version November 19, 2019, 9:22 pm EST
 *
 * @method Localidades findWithoutFail($id, $columns = ['*'])
 * @method Localidades find($id, $columns = ['*'])
 * @method Localidades first($columns = ['*'])
*/
class LocalidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_privincia',
        'localidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Localidades::class;
    }
}
