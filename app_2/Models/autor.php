<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class autor
 * @package App\Models
 * @version August 23, 2019, 8:37 pm EDT
 *
 * @property string titulo
 */
class autor extends Model
{
    use SoftDeletes;

    public $table = 'autors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
