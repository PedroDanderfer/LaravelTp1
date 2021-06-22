<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new User();

        $admin->name = 'Admin';
        $admin->surname = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('asdasdasd');
        $admin->created_at = now();
        $admin->updated_at = now();

        $admin->save();

        $admin->assignRole('admin');
        $admin->assignRole('seller');

        
        $buyer = new User();

        $buyer->name = 'Buyer';
        $buyer->surname = 'Buyer';
        $buyer->email = 'buyer@gmail.com';
        $buyer->password = Hash::make('asdasdasd');
        $buyer->created_at = now();
        $buyer->updated_at = now();

        $buyer->save();

        $buyer->assignRole('buyer');

        $seller = new User();

        $seller->name = 'Seller';
        $seller->surname = 'Seller';
        $seller->email = 'seller@gmail.com';
        $seller->password = Hash::make('asdasdasd');
        $seller->created_at = now();
        $seller->updated_at = now();

        $seller->save();

        $seller->assignRole('seller');
     
    }
}
