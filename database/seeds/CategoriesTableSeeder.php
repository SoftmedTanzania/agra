<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->uid = Uuid::generate(4);
        $category->name = 'Seeds';
        $category->description = 'Seeds that we plant on the dirt';
        $category->created_by = 'System';
        $category->created_at = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->uid = Uuid::generate(4);
        $category->name = 'Fertilizer';
        $category->description = 'What makes the plants happy';
        $category->created_by = 'System';
        $category->created_at = date('Y-m-d H:i:s');
        $category->save();

        $category = new Category();
        $category->uid = Uuid::generate(4);
        $category->name = 'Implements';
        $category->description = 'What fosters the dirt for the plants';
        $category->created_by = 'System';
        $category->created_at = date('Y-m-d H:i:s');
        $category->save();
    }
}
