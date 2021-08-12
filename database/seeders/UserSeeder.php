<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("America/Sao_Paulo");
        $now = date("Y-m-d h:m:s");

        DB::table('users')->insert([
            [
                'firstname'     => 'root',
                'lastname'      => 'Power Administrator',
                'birthday'      => $now,
                'email'         => 'root@admbp.psk',
                //'password'    => Hash::make('Alph@$2020!R')
                'password'      => Hash::make('123456')
            ],
            [
                'firstname'     => 'admin',
                'lastname'      => 'Administrator User',
                'birthday'      => $now,
                'email'         => 'admin@admbp.psk',
                //'password'    => Hash::make('Alph@$2020!A')
                'password'      => Hash::make('123456')
            ]
        ]);
    }
}
