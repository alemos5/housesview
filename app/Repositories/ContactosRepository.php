<?php

namespace App\Repositories;

use App\Models\Contactos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContactosRepository
 * @package App\Repositories
 * @version January 16, 2020, 9:09 am EST
 *
 * @method Contactos findWithoutFail($id, $columns = ['*'])
 * @method Contactos find($id, $columns = ['*'])
 * @method Contactos first($columns = ['*'])
*/
class ContactosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'propiedad_id',
        'user_id',
        'nombre',
        'email',
        'telefono',
        'comentario'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contactos::class;
    }
}
