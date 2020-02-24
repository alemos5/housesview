<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PropiedadEavValue
 * @package App\Models
 * @version November 20, 2019, 7:58 pm EST
 *
 * @property integer propiedad_eav_id
 * @property integer propiedad_id
 * @property integer user_id
 */
class PropiedadEavValue extends Model
{
    use SoftDeletes;

    public $table = 'propiedad_eav_value';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'propiedad_eav_id',
        'propiedad_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'propiedad_eav_id' => 'integer',
        'propiedad_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required'
    ];

    
}
