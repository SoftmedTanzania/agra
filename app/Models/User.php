<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version May 2, 2018, 5:47 pm UTC
 *
 * @property \App\Models\Level level
 * @property \App\Models\Location location
 * @property string uid
 * @property integer level_id
 * @property integer location_id
 * @property string firstname
 * @property string middlename
 * @property string surname
 * @property string email
 * @property string username
 * @property string password
 * @property string remember_token
 * @property string created_by
 * @property string updated_by
 * @property string deleted_by
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'uid',
        'level_id',
        'location_id',
        'firstname',
        'middlename',
        'surname',
        'email',
        'username',
        'password',
        'remember_token',
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
        'uid' => 'string',
        'level_id' => 'integer',
        'location_id' => 'integer',
        'firstname' => 'string',
        'middlename' => 'string',
        'surname' => 'string',
        'email' => 'string',
        'username' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
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
    public function level()
    {
        return $this->belongsTo(\App\Models\Level::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function location()
    {
        return $this->belongsTo(\App\Models\Location::class);
    }
}
