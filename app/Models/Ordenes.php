<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ordenes
 * @package App\Models
 * @version January 5, 2020, 9:23 am EST
 *
 * @property integer plan_id
 * @property float plan_valor
 * @property integer plan_duracion_id
 * @property float plan_duracion_valor
 * @property string orden
 * @property integer user_id
 * @property integer estatus
 * @property float valor
 */
class Ordenes extends Model
{
    use SoftDeletes;

    public $table = 'ordenes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'plan_id',
        'plan_valor',
        'plan_duracion_id',
        'plan_duracion_valor',
        'orden',
        'user_id',
        'estatus',
        'valor',
        'fecha_hasta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'plan_id' => 'integer',
        'plan_valor' => 'float',
        'plan_duracion_id' => 'integer',
        'plan_duracion_valor' => 'float',
        'orden' => 'string',
        'user_id' => 'integer',
        'estatus' => 'integer',
        'valor' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
