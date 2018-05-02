<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First sample location
        DB::table('locations')->insert([
            'uid' => Uuid::generate(4),
            'latitude' => -4.573916,
            'longitude' => 30.096946,
            'name' => 'Kasulu',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Second sample location
        DB::table('locations')->insert([
            'uid' => Uuid::generate(4),
            'latitude' => -4.518000,
            'longitude' => 30.045000,
            'name' => 'Kasulu Rural',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
            ]);
        
        // Third sample location
        DB::table('locations')->insert([
            'uid' => Uuid::generate(4),
            'latitude' => -3.583117,
            'longitude' => 30.724251,
            'name' => 'Kibondo',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
            ]);

        // Fourth sample location
        DB::table('locations')->insert([
            'uid' => Uuid::generate(4),
            'latitude' => -4.825949,
            'longitude' => 29.657873,
            'name' => 'Kigoma Rural',
            'created_by' => 'System',
            'created_at' => date('Y-m-d H:i:s'),
            ]);
    }
}
