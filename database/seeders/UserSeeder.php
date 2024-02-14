<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@ajayi.com',
        //     'role' => 'admin', // Admin role
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Nmafort IT Solutions',
            'email' => 'nmafortitsolutions@gmail.com',
          //  'role' => 'superAdmin',//Super Admin role
            'password' => bcrypt('Nmafort2024'),
            'email_verified_at' => now(),
        ]);
        
    }
}
