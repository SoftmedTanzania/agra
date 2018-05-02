<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use App\Models\Subcategory;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = new Subcategory();
        $subcategory->uid = Uuid::generate(4);
        $subcategory->category_id = 1;
        $subcategory->name = 'Maize';
        $subcategory->description = 'Called corn in another name';
        $subcategory->created_by = 'System';
        $subcategory->created_at = date('Y-m-d H:i:s');
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->uid = Uuid::generate(4);
        $subcategory->category_id = 1;
        $subcategory->name = 'Beans';
        $subcategory->description = 'With maize you get Makande';
        $subcategory->created_by = 'System';
        $subcategory->created_at = date('Y-m-d H:i:s');
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->uid = Uuid::generate(4);
        $subcategory->category_id = 2;
        $subcategory->name = 'CAN';
        $subcategory->description = 'Calcium Amoniun Nitrate';
        $subcategory->created_by = 'System';
        $subcategory->created_at = date('Y-m-d H:i:s');
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->uid = Uuid::generate(4);
        $subcategory->category_id = 2;
        $subcategory->name = 'Urea';
        $subcategory->description = 'Smells like urine in a way';
        $subcategory->created_by = 'System';
        $subcategory->created_at = date('Y-m-d H:i:s');
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->uid = Uuid::generate(4);
        $subcategory->category_id = 2;
        $subcategory->name = 'NPK';
        $subcategory->description = 'Nitrogen Potasium Amonium';
        $subcategory->created_by = 'System';
        $subcategory->created_at = date('Y-m-d H:i:s');
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->uid = Uuid::generate(4);
        $subcategory->category_id = 3;
        $subcategory->name = 'Sprayer';
        $subcategory->description = 'For spraying teh crops with chemicals';
        $subcategory->created_by = 'System';
        $subcategory->created_at = date('Y-m-d H:i:s');
        $subcategory->save();

        $subcategory = new Subcategory();
        $subcategory->uid = Uuid::generate(4);
        $subcategory->category_id = 3;
        $subcategory->name = 'Shears';
        $subcategory->description = 'For chopping of and prunning plants';
        $subcategory->created_by = 'System';
        $subcategory->created_at = date('Y-m-d H:i:s');
        $subcategory->save();
    }
}
