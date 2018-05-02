<?php

namespace App\Repositories;

use App\Models\Subcategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SubcategoryRepository
 * @package App\Repositories
 * @version May 2, 2018, 6:14 pm UTC
 *
 * @method Subcategory findWithoutFail($id, $columns = ['*'])
 * @method Subcategory find($id, $columns = ['*'])
 * @method Subcategory first($columns = ['*'])
*/
class SubcategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
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
        return Subcategory::class;
    }
}
