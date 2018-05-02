<?php

namespace App\Repositories;

use App\Models\Level;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LevelRepository
 * @package App\Repositories
 * @version May 2, 2018, 5:46 pm UTC
 *
 * @method Level findWithoutFail($id, $columns = ['*'])
 * @method Level find($id, $columns = ['*'])
 * @method Level first($columns = ['*'])
*/
class LevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uid',
        'name',
        'description',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Level::class;
    }
}
