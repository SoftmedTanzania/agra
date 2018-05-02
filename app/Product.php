<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', 'name', 'price', 'description',
    ];

    /**
     * Get the subcategory for specific product.
     */
    public function subcategories()
    {
        return $this->belongsToMany('App\Subcategory')->withTimestamps()->withPivot('uid');
    }
    
    /**
     * Get the unit for specific product.
     */
    public function units()
    {
        return $this->belongsToMany('App\Unit')->withTimestamps()->withPivot('uid');
    }
}
