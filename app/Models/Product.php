<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version May 2, 2018, 6:14 pm UTC
 *
 * @property \App\Models\Subcategory subcategory
 * @property \App\Models\Unit unit
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer subcategory_id
 * @property integer unit_id
 * @property string uid
 * @property string name
 * @property integer price
 * @property string description
 * @property string created_by
 * @property string updated_by
 * @property string deleted_by
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'subcategory_id',
        'unit_id',
        'uid',
        'name',
        'price',
        'description',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subcategory_id' => 'integer',
        'unit_id' => 'integer',
        'uid' => 'string',
        'name' => 'string',
        'price' => 'integer',
        'description' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string',
        'deleted_by' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function subcategory()
    {
        return $this->belongsTo(\App\Models\Subcategory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function unit()
    {
        return $this->belongsTo(\App\Models\Unit::class);
    }
}
