<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->uid = Uuid::generate(4);
        $product->subcategory_id = 1;
        $product->unit_id = 1;
        $product->name = 'F1B-Mahindi';
        $product->price = 1000;
        $product->description = 'Made in Arusha';
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Product();
        $product->uid = Uuid::generate(4);
        $product->subcategory_id = 2;
        $product->unit_id = 1;
        $product->name = 'F1B-Maharage';
        $product->price = 2000;
        $product->description = 'Made in Arusha in Meru';
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Product();
        $product->uid = Uuid::generate(4);
        $product->subcategory_id = 3;
        $product->unit_id = 3;
        $product->name = 'F2B-CAN';
        $product->price = 43000;
        $product->description = 'Mbolea ya Minjingu';
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Product();
        $product->uid = Uuid::generate(4);
        $product->subcategory_id = 3;
        $product->unit_id = 3;
        $product->name = 'F2B-Canaan';
        $product->price = 40000;
        $product->description = 'TFC fertilizer';
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Product();
        $product->uid = Uuid::generate(4);
        $product->subcategory_id = 6;
        $product->unit_id = 7;
        $product->name = 'Twin Shears';
        $product->price = 12000;
        $product->description = 'Lasher tools Ltd';
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();
    }
}
