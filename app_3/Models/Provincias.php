<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Provincias
 * @package App\Models
 * @version November 19, 2019, 9:15 pm EST
 *
 * @property string provincia
 */
class Provincias extends Model
{
    use SoftDeletes;

    public $table = 'provincias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'provincia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'provincia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'provincia' => 'required'
    ];

    
}
