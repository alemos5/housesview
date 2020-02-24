<?php

namespace App\Repositories;

use App\Models\Planes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanesRepository
 * @package App\Repositories
 * @version January 4, 2020, 6:04 pm EST
 *
 * @method Planes findWithoutFail($id, $columns = ['*'])
 * @method Planes find($id, $columns = ['*'])
 * @method Planes first($columns = ['*'])
*/
class PlanesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'plan',
        'recorrido',
        'plazo_d',
        'visibilidad',
        'p_instalacion',
        'p_publicacion',
        'p_m_i',
        'p_publicacion_dos',
        'destacado',
        'descuento'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Planes::class;
    }
}
