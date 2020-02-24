<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contactos
 * @package App\Models
 * @version January 16, 2020, 9:09 am EST
 *
 * @property integer propiedad_id
 * @property integer user_id
 * @property string nombre
 * @property string email
 * @property string telefono
 * @property string comentario
 */
class Contactos extends Model
{
    use SoftDeletes;

    public $table = 'contactos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'propiedad_id',
        'user_id',
        'nombre',
        'email',
        'telefono',
        'comentario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'propiedad_id' => 'integer',
        'user_id' => 'integer',
        'nombre' => 'string',
        'email' => 'string',
        'telefono' => 'string',
        'comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'propiedad_id' => 'required'
    ];

    
}
