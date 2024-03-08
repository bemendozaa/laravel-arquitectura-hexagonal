<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 0; $index <= 10; $index++) {
            DB::table('users')->insert([
                'first_name' => 'default' . $index,
                'last_name' => 'default' . $index,
                'email' => 'default' . $index . '@default.com',
                'cellphone' => '12345678',
                'password' => bcrypt('123456'),
                'state_id' => rand(1, 4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}