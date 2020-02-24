<?php

namespace App\Repositories;

use App\Models\Propiedades;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropiedadesRepository
 * @package App\Repositories
 * @version November 20, 2019, 12:18 pm EST
 *
 * @method Propiedades findWithoutFail($id, $columns = ['*'])
 * @method Propiedades find($id, $columns = ['*'])
 * @method Propiedades first($columns = ['*'])
*/
class PropiedadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_operacions_id',
        'tipo_propiedades_id',
        'provincias_id',
        'ciudads_id',
        'localidads_id',
        'direccion',
        'latitud',
        'longitud',
        'titulo',
        'precio',
        'moneda',
        'expensas',
        'cant_ambiente',
        'cant_dormitorio',
        'cant_banio',
        'cant_cochera',
        'cant_toilettes',
        'tipo_antiguedas_id',
        'anios',
        'metros',
        'metros_totales',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Propiedades::class;
    }
}
