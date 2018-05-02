<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use App\Models\Transaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Transaction();
        $product->uid = Uuid::generate(4);
        $product->user_id = 2;
        $product->product_id = 2;
        $product->type = 'Inventory';
        $product->amount = 2;
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Transaction();
        $product->uid = Uuid::generate(4);
        $product->user_id = 2;
        $product->product_id =3;
        $product->type = 'Inventory';
        $product->amount = 5;
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();

        $product = new Transaction();
        $product->uid = Uuid::generate(4);
        $product->user_id = 2;
        $product->product_id = 3;
        $product->type = 'Sales';
        $product->amount = 2;
        $product->created_by = 'System';
        $product->created_at = date('Y-m-d H:i:s');
        $product->save();

    }
}
