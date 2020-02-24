<?php

namespace App\Repositories;

use App\Models\Clientes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClientesRepository
 * @package App\Repositories
 * @version February 6, 2020, 6:35 am EST
 *
 * @method Clientes findWithoutFail($id, $columns = ['*'])
 * @method Clientes find($id, $columns = ['*'])
 * @method Clientes first($columns = ['*'])
*/
class ClientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'direccion_2',
        'direccion_3',
        'id_pais',
        'code_cliente',
        'nombre',
        'compania',
        'direccion',
        'pais',
        'ciudad',
        'estado',
        'telefono',
        'fax',
        'password',
        'email',
        'ci',
        'suscripcion',
        'servicio',
        'promocion',
        'publi',
        'catologo',
        'otro_catalogo',
        'correo',
        'pass_conf',
        'fecha',
        'estatus',
        'tarifa',
        'seguro',
        'bodega',
        'costo_consolidacion',
        'impuestos',
        'otros',
        'referido',
        'id_cliente_padre',
        'codigo_cliente_hijo',
        'observacion',
        'tarifa_orden',
        'id_agencia',
        'maximo',
        'rol',
        'customer_stripe',
        'remember_token',
        'request',
        'response',
        'cliente_envio',
        'img',
        'apellido',
        'horario_atencion',
        'whatsapp'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clientes::class;
    }
}
