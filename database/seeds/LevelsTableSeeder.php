<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First sample level
        DB::table('levels')->insert([
            'uid' => Uuid::generate(4),
            'name' => 'Admin',
            'description' => 'Seeded system administrator level',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Second sample level
        DB::table('levels')->insert([
            'uid' => Uuid::generate(4),
            'name' => 'Supplier',
            'description' => 'Seeded supplier level',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
            ]);
        
        // Third sample level
        DB::table('levels')->insert([
            'uid' => Uuid::generate(4),
            'name' => 'Agrodealer',
            'description' => 'Seeded agrodealer level',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
            ]);

        // Fourth sample level
        DB::table('levels')->insert([
            'uid' => Uuid::generate(4),
            'name' => 'Farmer',
            'description' => 'Seeded farmer level',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
            ]);

    }
}
