<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanDuracions
 * @package App\Models
 * @version January 4, 2020, 6:12 pm EST
 *
 * @property integer plan_id
 * @property integer cantidad
 * @property float valor
 */
class PlanDuracions extends Model
{
    use SoftDeletes;

    public $table = 'plan_duracions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'plan_id',
        'cantidad',
        'valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'plan_id' => 'integer',
        'cantidad' => 'integer',
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
