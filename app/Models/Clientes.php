<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clientes
 * @package App\Models
 * @version February 6, 2020, 6:35 am EST
 *
 * @property string direccion_2
 * @property string direccion_3
 * @property string id_pais
 * @property string code_cliente
 * @property string nombre
 * @property string compania
 * @property string direccion
 * @property string pais
 * @property string ciudad
 * @property string estado
 * @property string telefono
 * @property string fax
 * @property string password
 * @property string email
 * @property string ci
 * @property integer suscripcion
 * @property string servicio
 * @property string promocion
 * @property string publi
 * @property string catologo
 * @property string otro_catalogo
 * @property integer correo
 * @property string pass_conf
 * @property string|\Carbon\Carbon fecha
 * @property string estatus
 * @property integer tarifa
 * @property integer seguro
 * @property integer bodega
 * @property integer costo_consolidacion
 * @property integer impuestos
 * @property integer otros
 * @property string referido
 * @property integer id_cliente_padre
 * @property string codigo_cliente_hijo
 * @property string observacion
 * @property integer tarifa_orden
 * @property integer id_agencia
 * @property float maximo
 * @property string rol
 * @property string customer_stripe
 * @property string remember_token
 * @property string request
 * @property string response
 * @property integer cliente_envio
 * @property string img
 * @property string apellido
 * @property string horario_atencion
 * @property string whatsapp
 */
class Clientes extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id_cliente';

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cliente' => 'integer',
        'direccion_2' => 'string',
        'direccion_3' => 'string',
        'id_pais' => 'string',
        'code_cliente' => 'string',
        'nombre' => 'string',
        'compania' => 'string',
        'direccion' => 'string',
        'pais' => 'string',
        'ciudad' => 'string',
        'estado' => 'string',
        'telefono' => 'string',
        'fax' => 'string',
        'password' => 'string',
        'email' => 'string',
        'ci' => 'string',
        'suscripcion' => 'integer',
        'servicio' => 'string',
        'promocion' => 'string',
        'publi' => 'string',
        'catologo' => 'string',
        'otro_catalogo' => 'string',
        'correo' => 'integer',
        'pass_conf' => 'string',
        'fecha' => 'datetime',
        'estatus' => 'string',
        'tarifa' => 'integer',
        'seguro' => 'integer',
        'bodega' => 'integer',
        'costo_consolidacion' => 'integer',
        'impuestos' => 'integer',
        'otros' => 'integer',
        'referido' => 'string',
        'id_cliente_padre' => 'integer',
        'codigo_cliente_hijo' => 'string',
        'observacion' => 'string',
        'tarifa_orden' => 'integer',
        'id_agencia' => 'integer',
        'maximo' => 'float',
        'rol' => 'string',
        'customer_stripe' => 'string',
        'remember_token' => 'string',
        'request' => 'string',
        'response' => 'string',
        'cliente_envio' => 'integer',
        'img' => 'string',
        'apellido' => 'string',
        'horario_atencion' => 'string',
        'whatsapp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_cliente' => 'required',
        'cliente_envio' => 'required',
        'img' => 'required',
        'apellido' => 'required',
        'horario_atencion' => 'required',
        'whatsapp' => 'required'
    ];

    
}
