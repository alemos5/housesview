<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Favoritos
 * @package App\Models
 * @version January 10, 2020, 6:31 am EST
 *
 * @property integer propiedad_id
 * @property integer user_id
 */
class Favoritos extends Model
{
    use SoftDeletes;

    public $table = 'favoritos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'propiedad_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'propiedad_id' => 'required',
        'user_id' => 'required'
    ];

    
}
