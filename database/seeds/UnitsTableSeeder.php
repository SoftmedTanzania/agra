<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use App\Models\Unit;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit = new Unit();
        $unit->uid = Uuid::generate(4);
        $unit->name = 'Kilo';
        $unit->description = 'For grains and powders and solids';
        $unit->created_by = 'System';
        $unit->created_at = date('Y-m-d H:i:s');
        $unit->save();

        $unit = new Unit();
        $unit->uid = Uuid::generate(4);
        $unit->name = 'Can';
        $unit->description = 'For can packed goods';
        $unit->created_by = 'System';
        $unit->created_at = date('Y-m-d H:i:s');
        $unit->save();

        $unit = new Unit();
        $unit->uid = Uuid::generate(4);
        $unit->name = 'Bag';
        $unit->description = 'For packed goods';
        $unit->created_by = 'System';
        $unit->created_at = date('Y-m-d H:i:s');
        $unit->save();

        $unit = new Unit();
        $unit->uid = Uuid::generate(4);
        $unit->name = 'Ton';
        $unit->description = 'For car ferried bulk goods';
        $unit->created_by = 'System';
        $unit->created_at = date('Y-m-d H:i:s');
        $unit->save();

        $unit = new Unit();
        $unit->uid = Uuid::generate(4);
        $unit->name = 'Litre';
        $unit->description = 'For liquid goods';
        $unit->created_by = 'System';
        $unit->created_at = date('Y-m-d H:i:s');
        $unit->save();

        $unit = new Unit();
        $unit->uid = Uuid::generate(4);
        $unit->name = 'Cutling';
        $unit->description = 'For plants that require grafting';
        $unit->created_by = 'System';
        $unit->created_at = date('Y-m-d H:i:s');
        $unit->save();

        $unit = new Unit();
        $unit->uid = Uuid::generate(4);
        $unit->name = 'Piece';
        $unit->description = 'MOstly fot tools and objects';
        $unit->created_by = 'System';
        $unit->created_at = date('Y-m-d H:i:s');
        $unit->save();
    }
}
