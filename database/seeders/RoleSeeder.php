<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([
            [
                'name' => 'super_admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'natural',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

    }
}