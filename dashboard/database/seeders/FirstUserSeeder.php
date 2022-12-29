<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class FirstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'status' => '1',
            'role' => '1',
            'name' => 'Manolo Cabrera',
            'email' => 'mcabrera@devel.com',
            'password' => Hash::make('password'),
            'permissions' => json_encode(['all' => true])
        ]);
    }
}
