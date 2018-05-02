<?php

use Faker\Factory as Faker;
use App\Models\Subcategory;
use App\Repositories\SubcategoryRepository;

trait MakeSubcategoryTrait
{
    /**
     * Create fake instance of Subcategory and save it in database
     *
     * @param array $subcategoryFields
     * @return Subcategory
     */
    public function makeSubcategory($subcategoryFields = [])
    {
        /** @var SubcategoryRepository $subcategoryRepo */
        $subcategoryRepo = App::make(SubcategoryRepository::class);
        $theme = $this->fakeSubcategoryData($subcategoryFields);
        return $subcategoryRepo->create($theme);
    }

    /**
     * Get fake instance of Subcategory
     *
     * @param array $subcategoryFields
     * @return Subcategory
     */
    public function fakeSubcategory($subcategoryFields = [])
    {
        return new Subcategory($this->fakeSubcategoryData($subcategoryFields));
    }

    /**
     * Get fake data of Subcategory
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSubcategoryData($subcategoryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'category_id' => $fake->randomDigitNotNull,
            'uid' => $fake->word,
            'name' => $fake->word,
            'description' => $fake->word,
            'created_by' => $fake->word,
            'updated_by' => $fake->word,
            'deleted_by' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $subcategoryFields);
    }
}
