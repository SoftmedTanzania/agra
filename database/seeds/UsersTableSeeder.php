<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the first sample user named admin
        $user = new User();
        $user->level_id = 1;
        $user->location_id = 1;
        $user->uid = Uuid::generate(4);
        $user->firstname = 'System';
        $user->middlename = 'Initial';
        $user->surname = 'Admin';
        $user->email = str_random(10).'@gmail.com';
        $user->username = 'admin';
        $user->password = bcrypt('admin');
        $user->created_by = 'System';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();

        // Create the second sample user named kizito
        $user = new User();
        $user->level_id = 2;
        $user->location_id = 2;
        $user->uid = Uuid::generate(4);
        $user->firstname = 'Kizito';
        $user->middlename = 'Stanslaus';
        $user->surname = 'Mrema';
        $user->email = 'kizomanizo@gmail.com';
        $user->username = 'kizito';
        $user->password = bcrypt('kizito');
        $user->created_by = 'System';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();

        // Create the first sample user named supplier
        $user = new User();
        $user->level_id = 3;
        $user->location_id = 3;
        $user->uid = Uuid::generate(4);
        $user->firstname = 'Supplier';
        $user->middlename = 'Initial';
        $user->surname = 'User';
        $user->email = str_random(10).'@gmail.com';
        $user->username = 'supplier';
        $user->password = bcrypt('supplier');
        $user->created_by = 'System';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();

        // Create the first sample user named agrodealer
        $user = new User();
        $user->level_id = 3;
        $user->location_id = 3;
        $user->uid = Uuid::generate(4);
        $user->firstname = 'Dealer';
        $user->middlename = 'Initial';
        $user->surname = 'Dealer';
        $user->email = str_random(10).'@gmail.com';
        $user->username = 'dealer';
        $user->password = bcrypt('dealer');
        $user->created_by = 'System';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();
            

        // Create the first sample user named farmer
        $user = new User();
        $user->level_id = 1;
        $user->location_id = 1;
        $user->uid = Uuid::generate(4);
        $user->firstname = 'Farmer';
        $user->middlename = 'Initial';
        $user->surname = 'Farmer';
        $user->email = str_random(10).'@gmail.com';
        $user->username = 'farmer';
        $user->password = bcrypt('farmer');
        $user->created_by = 'System';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();
    }
}
