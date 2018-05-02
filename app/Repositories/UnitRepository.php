<?php

namespace App\Repositories;

use App\Models\Unit;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UnitRepository
 * @package App\Repositories
 * @version May 2, 2018, 6:13 pm UTC
 *
 * @method Unit findWithoutFail($id, $columns = ['*'])
 * @method Unit find($id, $columns = ['*'])
 * @method Unit first($columns = ['*'])
*/
class UnitRepository extends BaseRepository
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
        return Unit::class;
    }
}
