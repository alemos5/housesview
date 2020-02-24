<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Planes
 * @package App\Models
 * @version January 4, 2020, 6:04 pm EST
 *
 * @property string plan
 * @property integer recorrido
 * @property float plazo_d
 * @property integer visibilidad
 * @property float p_instalacion
 * @property float p_publicacion
 * @property float p_m_i
 * @property float p_publicacion_dos
 * @property integer destacado
 * @property float descuento
 */
class Planes extends Model
{
    use SoftDeletes;

    public $table = 'planes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'plan' => 'string',
        'recorrido' => 'integer',
        'plazo_d' => 'float',
        'visibilidad' => 'integer',
        'p_instalacion' => 'float',
        'p_publicacion' => 'float',
        'p_m_i' => 'float',
        'p_publicacion_dos' => 'float',
        'destacado' => 'integer',
        'descuento' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
