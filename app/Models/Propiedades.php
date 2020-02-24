<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Propiedades
 * @package App\Models
 * @version November 20, 2019, 12:18 pm EST
 *
 * @property integer tipo_operacions_id
 * @property integer tipo_propiedades_id
 * @property integer provincias_id
 * @property integer ciudads_id
 * @property integer localidads_id
 * @property string direccion
 * @property string latitud
 * @property string longitud
 * @property string titulo
 * @property float precio
 * @property integer moneda
 * @property float expensas
 * @property integer cant_ambiente
 * @property integer cant_dormitorio
 * @property integer cant_banio
 * @property integer cant_cochera
 * @property integer cant_toilettes
 * @property integer tipo_antiguedas_id
 * @property integer anios
 * @property float metros
 * @property float metros_totales
 * @property integer user_id
 */
class Propiedades extends Model
{
    use SoftDeletes;

    public $table = 'propiedades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo_operacions_id',
        'tipo_propiedades_id',
        'tipo_duenio_id',
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
        'user_id',
        'img',
        'script',
        'descripcion',
        'plan_id',
        'plan_duracion_id',
        'estatus',
        'orden_id',
        'script_result'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_operacions_id' => 'integer',
        'tipo_propiedades_id' => 'integer',
        'provincias_id' => 'integer',
        'ciudads_id' => 'integer',
        'localidads_id' => 'integer',
        'direccion' => 'string',
        'latitud' => 'string',
        'longitud' => 'string',
        'titulo' => 'string',
        'precio' => 'float',
        'moneda' => 'integer',
        'expensas' => 'float',
        'cant_ambiente' => 'integer',
        'cant_dormitorio' => 'integer',
        'cant_banio' => 'integer',
        'cant_cochera' => 'integer',
        'cant_toilettes' => 'integer',
        'tipo_antiguedas_id' => 'integer',
        'anios' => 'integer',
        'metros' => 'float',
        'metros_totales' => 'float',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
