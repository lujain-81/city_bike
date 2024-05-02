<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CompanyInformation;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'Name'          => 'Admin',
            'Email'         => 'admin@city-bike.com',
            'Phone'         => '966000111000',
            'Password'      => Hash::make('password')
        ]);
        CompanyInformation::create([
            'AdminID'   => 1,
            'Name'      => 'City Bike',
            'Email'     => 'info@city-bike.com',
            'Phone'     => '9660000',
            'Address'   => 'Address',
            'Logo'      => '0'
        ]);
    }
}
