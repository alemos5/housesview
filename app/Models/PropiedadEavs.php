<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PropiedadEavs
 * @package App\Models
 * @version January 9, 2020, 8:32 pm EST
 *
 * @property string attribute
 * @property string icon
 * @property integer grupo_id
 * @property integer user_id
 */
class PropiedadEavs extends Model
{
    use SoftDeletes;

    public $table = 'propiedad_eavs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'attribute',
        'icon',
        'grupo_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'attribute' => 'string',
        'icon' => 'string',
        'grupo_id' => 'integer',
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
