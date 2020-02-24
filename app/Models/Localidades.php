<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Localidades
 * @package App\Models
 * @version November 19, 2019, 9:22 pm EST
 *
 * @property integer id_privincia
 * @property string localidad
 */
class Localidades extends Model
{
    use SoftDeletes;

    public $table = 'localidades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_privincia',
        'localidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_privincia' => 'integer',
        'localidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_privincia' => 'required',
        'localidad' => 'required'
    ];

    
}
