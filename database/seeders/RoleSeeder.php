<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'name' => 'Admin',
                'working_area' => 'EverWhere',
                'description' => 'Admin',
                'status' => '1',

                'created_at' => date("Y-m-d H:i:s"),
                'updated_by' => null,
                'deleted_by' => null,
            ]
        );
        DB::table('roles')->insert([
            [
                'name' => 'Developer',
                'working_area' => 'Codeing Area',
                'description' => 'Program developer',
                'status' => '1',

                'created_at' => date("Y-m-d H:i:s"),
                'updated_by' => null,
                'deleted_by' => null,
            ]
        ]);
        DB::table('roles')->insert([
            'name' => 'User',
            'working_area' => 'fronted area',
            'description' => 'fornted section',
            'status' => '1',

            'created_at' => date("Y-m-d H:i:s"),
            'updated_by' => null,
            'deleted_by' => null,
        ]);

    }
}